<template>
  <div class="container-fluid bg-color mb-3">
    <div class="container">
      <nav class="navbar navbar-color">
        <RouterLink class="navbar__brand" to="/" id="title">
          <img src="../../../public/image/Logo-DancingScript.gif" alt="MyBookshelves" id="logo">
        </RouterLink>
    <!-- <div class="navbar__menu">
      <div v-if="isLogin" class="navbar__item">
        <button class="button">
          <i class="icon ion-md-add"></i>
          Submit a photo
        </button>
      </div>
      <span v-if="isLogin" class="navbar__item">
        username
      </span>
      <div v-else class="navbar__item">
        <RouterLink class="button button--link" to="/login">
          Login / Register
        </RouterLink>
      </div>
    </div> -->
    <div>
      <RouterLink to="/books">
        <ButtonComponent class="btn btn-menu" btnName="BookList" />
      </RouterLink>
      <RouterLink to="/books/create">
        <ButtonComponent class="btn btn-menu" btnName="ADD" />
      </RouterLink>
    </div>
      </nav>
    </div>
    
  </div>
</template>

<script>
import ButtonComponent from '../components/ButtonComponent.vue'
export default {
  components: {
    ButtonComponent
  },
  computed: {
    isLogin () {
      return this.$store.getters['auth/check']
    },
    username () {
      return this.$store.getters['auth/username']
    }
  }
}
</script>