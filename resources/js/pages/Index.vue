<template>
    <div>
        <h1>Index</h1>
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-box">
                <p>
                「MyBookshelves」は、書籍管理アプリです。<br>
                所有している書籍を登録することができます。
                </p>
                <table class="not_table">
                <tr>
                    <th>
                    <RouterLink to="/books">
                        <ButtonComponent class="btn btn-menu" btnName="BookList" />
                    </RouterLink>
                    </th>
                    <td>書籍の一覧ページへ移動します</td>
                </tr>
                <tr>
                    <th>
                    <RouterLink to="/books/create">
                        <ButtonComponent class="btn btn-menu" btnName="ADD" />
                    </RouterLink>
                    </th>
                    <td>書籍を新たに登録します</td>
                </tr>
                </table>
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