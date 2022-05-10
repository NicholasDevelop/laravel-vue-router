<template>
  <div class="py-12">
      <div class="container">
          <h1 class="text-center my-6">Ultimi Post</h1>
      </div>
      <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
          <Card v-for="post in posts" :key="post.id" :post="post" />
      </div>
      <div class="container py-4">
          <ul class="pagination flex justify-center gap-4 items-center">
              <li @click="fetchPosts( n )" :class="[ currentPage === n ? 'bg-orange-400' : 'bg-white/30', 'dot cursor-pointer rounded-full h-10 w-10 flex items-center justify-center text-sm']" v-for="n in lastPage" :key="n">{{ n }}</li>
          </ul>
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
            posts: [],
            lastPage: 0,
            currentPage: 1,
        }
    },
    methods: {
        fetchPosts(page = 1){

            axios.get('/api/posts',{
                params: {
                    page              //page = page
                }
            })
            .then( res => {
                const { posts } = res.data
                const { data, last_page, current_page } =posts
                this.posts = posts.data
                this.currentPage = current_page
                this.lastPage = last_page
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