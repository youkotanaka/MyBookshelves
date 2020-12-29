<template>
  <div>
    <header>
      <Header />
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
import Header from './components/Navber'
import Footer from './components/Footer.vue'

export default {
  components: {
    Navber,
    Footer
  }
}
</script>