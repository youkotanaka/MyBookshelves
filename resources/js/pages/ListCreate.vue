<template>
    <div>
        <h1>List Create</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <input type="text" class="col-sm-9 form-control" id="title" v-model="book.title">
                    </div>
                    <div class="form-group row">
                        <label for="vol" class="col-sm-3 col-form-label">Vol</label>
                        <input type="text" class="col-sm-9 form-control" id="vol" v-model="book.vol">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            book: {}
        }
    },
    methods: {
        submit() {
            axios.post('/api/books', this.book).then((res) => {
                this.$router.push({name: 'books'});
            });
        }
    }
}
</script>