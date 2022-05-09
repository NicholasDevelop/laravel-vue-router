<template>
  <div class="app bg-zinc-800 text-white">
      <Header />
      <PostsGrid />
      <Footer />
  </div>
</template>

<script>
import PostsGrid from './PostsIndex.vue'
import Header from './HeaderComponent.vue'
import Footer from './FooterComponent.vue'

export default {
    components: {
        PostsGrid,
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