<template>
    <div v-if="!loading" class="py-10">
        <img src="https://picsum.photos/1920/350" class="w-full" alt="">

        <section>
            <div class="max-w-[750px] mx-auto py-10">
                <h1 class="text-3xl mb-2">{{ post.title }}</h1>
                <p class="text-orange-400 text-md" v-if="post.category">{{ post.category.name }}</p>
                <ul class="flex gap-2 items-center">
                    <li class="text-white/50 italic text-sm after:content-[',']" v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</li>
                </ul>

                <div class="py-12" v-html="post.content"></div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return{
            post: null,
            loading: true
        }
    },
    methods: {
        fetchPost() {
            axios.get(`/api/posts/${ this.$route.params.slug }`)
            .then( res =>{
                const { post } = res.data

                this.post = post
                this.loading = false
            })
            .catch( err => {
                console.warn( err )

                this.$router.push('/404')
            })
        }
    },
    beforeMount() {
        this.fetchPost()
    }
}
</script>

<style lang="scss" scoped>

</style>