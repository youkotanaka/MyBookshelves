<template>
    <div>
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
            <p>{{ book.title }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data:() => ({
        book: null,
        searchText: '',
        books: []
    }),
    // async created() {
    //     const res = await axios.get(this.book)
    //     this.book = res.data.results
    // },
    computed: {
    search_books() {
        //★猫本P.162を見よ（$emit）
      let searchText2 = this.searchText.trim()

      if (searchText2 === '') return this.books;

      return this.books.filter(book => {
        return book.title.includes(searchText2) ||
        book.vol.includes(searchText2)
      })
    },
        // splittedSearchText() {
        //     // return this.searchText.splite(/[\s]+/)
        // },
        // booksList() {
        //     if (!this.books) {
        //         return []
        //     }
        //     if (!this.searchText.length) {
        //         return this.books
        //     }
        //     return this.books.filter(book => {
        //         return  this.filteredBooks(book)
        //     })
        // }
    },
    methods: {
        filteredBooks(book) {
            if (this.splittedSearchText.every(el =>
            book.title.includes(el)
            )
            ){
                return true
            }
        }
    }
};
</script>