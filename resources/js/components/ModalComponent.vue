<template>
<div id="overlay" v-on:click="clickEvent">
    <div id="attention" v-on:click="stopEvent">
        <p>本当に削除してよろしいですか？</p>
        <ButtonComponent class="btn btn-danger" btnName="OK" v-on:click="deleteBook()"/>
        <ButtonComponent class="btn btn-primary" btnName="Chancel" v-on:click="clickEvent" />
    </div>
</div>
</template>

<script>
import ButtonComponent from './ButtonComponent.vue';
export default {
    components: {
        ButtonComponent
    },
    name: 'OpenModal',
    data: function() {
        return {
            showContent: false
        }
    },
    methods: {
        deleteBook: function() {
            this.$emit('deleteBook()')
        },
        clickEvent: function() {
            this.$emit('click')
        },
        stopEvent: function() {
            event.stopPropagation()
        },
    }
}
</script>

<style>
  #overlay{
    /* 要素を重ねたときの順番 */
    z-index:1;

    /* 画面全体を覆う設定 */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.1);

    /* 画面中央に要素を表示させる設定 */
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #attention{
    z-index: 2;
    width: 50%;
    padding: 1em;
    background: #fff;
  }
</style>