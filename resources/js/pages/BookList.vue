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
            <ModalComponent v-on:close="closeModal" v-if="showContent">
              <p>本当に削除してよろしいですか？</p>
              <ButtonComponent class="btn btn-danger" v-on:click="deleteBook(book.id)" btnName="OK" />
              <ButtonComponent class="btn btn-primary" v-on:click="closeModal" btnName="Cancel" />
            </ModalComponent>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// import InputComponent from '../components/InputComponent.vue';
import ModalComponent from '../components/ModalComponent.vue';
import ButtonComponent from '../components/ButtonComponent.vue';
export default {
  components: {
    // InputComponent,
    ModalComponent,
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
      this.closeModal()
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