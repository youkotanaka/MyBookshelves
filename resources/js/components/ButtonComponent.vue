<template>
    <button v-on:click="deleteBook(book.id)">{{ btnName }}
    </button>
</template>
<script>
export default {
    name: 'Button',
    props: {
        'btnName': {
            type: String,
            default: 'Button'
        }
    }
}
</script>