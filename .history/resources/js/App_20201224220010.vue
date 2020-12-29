<template>
  <div>
    <header>
      < />
    </header>
    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
    <Footer />
  </div>
</template>

<script>
import Navber from './components/Navber'
import Footer from './components/Footer.vue'

export default {
  components: {
    Navber,
    Footer
  }
}
</script>