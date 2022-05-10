<template>
    <div class="py-10">
        {{ $route.params.slug }}
        <h1 v-if="post">{{ post.title }}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return{
            post: null
        }
    },
    mounted() {
        console.log(this.$route)
    },
    beforeMount() {
        axios.get(`/api/posts/${ this.$route.params.slug }`)
        .then( res =>{
            const { post } = res.data
            this.post = post
        })
        .catch( err => {
            console.warn( err )
        })
    }
}
</script>

<style lang="scss" scoped>

</style>