<template>
    <div>
        <h1>Book Show</h1>
        <div class="col-sm-6">
            <form>
                <div class="form -group row border-bottom">
                    <label for="id" class="col-sm-3 col-form-label">ID</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="book.id">
                </div>
                <div class="form-group row border-bottom">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" id="title" v-model="book.title">
                </div>
                <div class="form-group row border-bottom">
                    <label for="vol" class="col-sm-3 col-form-label">Vol.</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" id="vol" v-model="book.vol">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        bookID: String
    },
    data: function() {
        return {
            book: {}
        }
    },
    methods: {
        getBook(){
            axios.get('/api/books/' + this.bookID)
            .then((res) => {
                this.book = res.data;
            });
        }
    },
    mounted() {
        this.getBook();
    }
}
</script>