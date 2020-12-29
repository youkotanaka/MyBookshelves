<template>
    <div>
        <h1>Book Show</h1>
        <div class="col-sm-6">
            <form>
                <div class="form -group row border-bottom">
                    <label for="id" class="col-sm-3 col-form-label">ID</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="bookID">
                </div>
                <div class="form-group row border-bottom">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="title" value="title title">
                </div>
                <div class="form-group row border-bottom">
                    <label for="title" class="col-sm-3 col-form-label">Vol.</label>
                    <input type="text" class="col-sm-9 form-control-plaintext" readonly id="vol" value="vol1">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        bookID: String
    }
}
</script>