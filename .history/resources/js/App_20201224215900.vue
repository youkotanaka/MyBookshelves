<template>
  <div>
    <header>
      <Navbar />
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
import Navber
import Footer from './components/Footer.vue'

export default {
  components: {
    Footer
  }
}
</script>