<template>
    <div>
        <h1>Index</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-box">
                <RouterLink to="/books">
                    <ButtonComponent class="btn btn-menu" btnName="BookList" />
                </RouterLink>
                <RouterLink to="/books/create">
                    <ButtonComponent class="btn btn-menu" btnName="ADD" />
                </RouterLink>
            </div>
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