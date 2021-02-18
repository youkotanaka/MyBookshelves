<template>
    <div>
        <h1>Index</h1>
        <div class="row justify-content-center">

                <RouterLink to="/books">
                    <ButtonComponent class="btn btn-menu" btnName="BookList" />
                </RouterLink>
                <RouterLink to="/books/create">
                    <ButtonComponent class="btn btn-menu" btnName="ADD" />
                </RouterLink>

        </div>
    </div>
</template>

<script>
import ButtonComponent from '../components/ButtonComponent.vue'
export default {
    components: {
        ButtonComponent
    }
}
</script>