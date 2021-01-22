<template>
    <div>
        <input
            class = "inputForm"
            v-bind:value = "value"
            v-on:input = "$emit('input', $event.target.value)"
            type="text"
            placeholder="Enter Text">
    </div>
</template>

<script>
export default {
    props: ['value'],
};
</script>