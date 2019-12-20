<template>
  <div id="app">
    <Header />

    <main>
      <router-view></router-view>
    </main>

    <Footer />
  </div>
</template>

<script>
import Header from './components/Partials/Header.vue'
import Footer from './components/Partials/Footer.vue'

export default {
  name: 'app',
  components: {
    Header,
    Footer
  }
}
</script>

<style lang="scss">

  @import url('https://fonts.googleapis.com/css?family=Hind:300,400,500,600&display=swap');

  html, body {
    margin: 0;
    padding: 0;

    height: 100%;
  }

  body {
    font-family: Hind, sans-serif;
    background-color: #f7f9fc;
  }

  main {
    min-height: 75vh;
  }

</style>
