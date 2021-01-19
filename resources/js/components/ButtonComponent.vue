<template>
    <button v-on:click="deleteBook">{{ btnName }}
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
    },
    methods: {
        deleteBook: function() {
            this.$emit('click')
        }
    }
}
</script>