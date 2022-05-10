<template>
  <div class="app bg-zinc-800 text-white flex flex-col">
      <Header />
      
      <router-view class="grow"></router-view>

      <Footer />
  </div>
</template>

<script>
import Header from '../components/HeaderComponent.vue'
import Footer from '../components/FooterComponent.vue'

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