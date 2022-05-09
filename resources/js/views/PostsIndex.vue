<template>
  <div>
      <div class="container">
          <h1 class="text-center my-6">Ultimi Post</h1>
      </div>
      <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
          <Card v-for="post in posts" :key="post.id" :post="post" />
      </div>
  </div>
</template>

<script>
import Card from '../components/CardComponent.vue'
export default {
    components: {
        Card,
    },
    data(){
        return{
            posts: []
        }
    },
    methods: {
        fetchPosts(){

            axios.get('/api/posts')
            .then( res => {
                const { posts } = res.data
                console.log(posts)
                this.posts = posts.data
            })
            .catch( err => {
                console.warn(err)
            })
        }
    },
    mounted(){
        this.fetchPosts();
    }
}
</script>

<style lang="scss" scoped>

</style>