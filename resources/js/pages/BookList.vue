<template>
  <div class="container">
    <h1>Book List</h1>
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
        <tr v-for="(book, index) in books" :key="index">
          <th scope="row">{{ book.id }}</th>
          <td>{{ book.title }}</td>
          <td>{{ book.vol }}</td>
          <td>
            <RouterLink v-bind:to="{name: 'BookShow', params: {bookID: book.id}}">
              <button class="btn btn-primary">Show</button>
            </RouterLink>
          </td>
          <td>
            <RouterLink v-bind:to="{name: 'ListEdit', params: {bookID: book.id}}">
              <button class="btn btn-succes">Edit</button>
            </RouterLink>
          </td>
          <td>
            <button class="btn btn-danger" v-on:click="deleteBook(book.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      books: []
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