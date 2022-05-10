<template>
  <div class="app bg-zinc-800 text-white">
      <Header />
      
      <router-view></router-view>

      <Footer />
  </div>
</template>

<script>
import Header from './HeaderComponent.vue'
import Footer from './FooterComponent.vue'

export default {
    components: {
        Header,
        Footer
    }
}
</script>

<style lang="scss" scoped>

.app{
    min-height: 100vh;
}

</style>