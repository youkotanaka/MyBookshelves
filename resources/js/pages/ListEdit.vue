<template>
    <div>
        <h1>List Edit</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-box">
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="book.id">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-controle" id="title" v-model="book.title">
                    </div>
                    <div class="form-group row">
                        <label for="vol" class="col-sm-3 col-form-label">Vol</label>
                        <input type="text" class="col-sm-9 form-controle" id="vol" v-model="book.vol">
                    </div>
                    <button type="submit" class="btn btn-normal">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        bookID: String
    },
    data: function() {
        return {
            book: {}
        }
    },
    methods: {
        getBook() {
            axios.get('/api/books/' + this.bookID)
            .then((res) => {
                this.book = res.data;
            });
        },
        submit() {
            axios.put('/api/books/' + this.bookID, this.book)
            .then((res) => {
                this.$router.push({name: 'BookList'})
            });
        }
    },
    mounted() {
        this.getBook();
    }
}
</script>