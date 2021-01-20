<template>
  <div class="container">
    <h1>Book List</h1>
    <input
            v-model = "searchText"
            type = "text"
            placeholder = "Enter text"
            v-on:compositionStart = "isComposing = true"
            v-on:compositionend = "isComposing = false">
        <div
            v-for = "(book, index) in search_books"
            v-bind:key = "index"
        >
        </div>
    <!-- <InputComponent v-bind:SearchWords='Keywords' /> ★検索機能 -->
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Vol</th>
          <th scope="col">Show</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(book, index) in search_books" v-bind:key="index">
          <th scope="row">{{ book.id }}</th>
          <td>{{ book.title }}</td>
          <td>{{ book.vol }}</td>
          <td>
            <RouterLink v-bind:to="{name: 'BookShow', params: {bookID: book.id}}">
              <ButtonComponent class= "btn btn-primary" btnName = "Show"/>
            </RouterLink>
          </td>
          <td>
            <RouterLink v-bind:to="{name: 'ListEdit', params: {bookID: book.id}}">
              <ButtonComponent class= "btn btn-success" btnName = "Edit"/>
            </RouterLink>
          </td>
          <td>
            <ButtonComponent class= "btn btn-danger" btnName = "Delete" v-on:click="openModal"/>
            <div id="overlay" v-show="showContent" v-on:click="closeModal">
              <div id="attention" v-on:click="stopEvent">
                <p>本当に削除してよろしいですか？</p>
                  <ButtonComponent class="btn btn-danger" btnName="OK" v-on:click="deleteBook(book.id)"/>
                  <ButtonComponent class="btn btn-primary" btnName="Chancel" v-on:click="closeModal"/>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// import InputComponent from '../components/InputComponent.vue';
// inport ModalComponent from '../components/ModalComponent.vue';
import ButtonComponent from '../components/ButtonComponent.vue';
export default {
  components: {
    // InputComponent,
    // ModalComponent,
    ButtonComponent
  },
  data: function() {
    return {
      book: null,
      searchText: '',
      books: [],
      showContent: false
    }
  },
  computed: {
    search_books() {

      let searchText2 = this.searchText.trim()

      if (searchText2 === '') return this.books;

      return this.books.filter(book => {
        return book.title.includes(searchText2) ||
        book.vol.includes(searchText2)
      })
    }
  },
  methods: {
    getBooks() {
      axios.get('/api/books')
      .then((res) => {
        this.books = res.data;
      });
    },
    deleteBook(id) {
      axios.delete('/api/books/' + id)
      .then((res) => {
        this.getBooks();
      });
    },
    openModal: function() {
      this.showContent = true
    },
    closeModal: function() {
      this.showContent = false
    },
    stopEvent: function() {
      event.stopPropagation()
    }
  },
  mounted() {
    this.getBooks();
  }
}
</script>

<style>
  #overlay{
    /* 要素を重ねたときの順番 */
    z-index:1;

    /* 画面全体を覆う設定 */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.1);

    /* 画面中央に要素を表示させる設定 */
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #attention{
    z-index: 2;
    width: 50%;
    padding: 1em;
    background: #fff;
  }
</style>