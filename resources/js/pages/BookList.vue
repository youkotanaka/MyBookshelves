<template>
  <div class="container">
    <h1>Book List</h1>
    <input
            v-model = "searchText"
            type = "text"
            placeholder = "Enter text"
            @compositionStart = "isComposing = true"
            @compositionend = "isComposing = false">
        <div
            v-for = "(book, index) in search_books"
            v-bind:key = "index"
        >
        </div>
    <!-- <InputComponent :SearchWords='Keywords' /> ★検索機能 -->
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
        <tr v-for="(book, index) in search_books" :key="index">
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
            <ButtonComponent class= "btn btn-danger" btnName = "Delete" v-on:click="deleteBook(book.id)"/>
            <!-- <button class="btn btn-danger" v-on:click="deleteBook(book.id)">Delete</button> -->
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// import InputComponent from '../components/InputComponent.vue';
import ButtonComponent from '../components/ButtonComponent.vue';
export default {
  components: {
    // InputComponent,
    ButtonComponent
  },
  data: function() {
    return {
      book: null,
      searchText: '',
      books: []
    }
  },
  computed: {
    search_books() {
      let searchText2 = this.searchText.trim()
      if (searchText2 === '') return this.books;

      return this.books.filter(book => {
          return book.title.includes(this.searchText) ||
          book.vol.includes(this.searchText)
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
    }
  },
  mounted() {
    this.getBooks();
  }
}
</script>