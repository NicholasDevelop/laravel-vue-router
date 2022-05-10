<template>
    <div class="py-10">
        {{ $route.params.slug }}

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
        // axios.get('/api/posts/${ this.$route.params.slug }')
    }
}
</script>

<style lang="scss" scoped>

</style>