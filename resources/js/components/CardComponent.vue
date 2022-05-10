<template>
  <div class="post card rounded-lg border border-white/30 overflow-hidden relative">
      <img src="https://picsum.photos/450/250" class="w-full object-cover" alt="">
      <div class="card-body p-6">
          <h4 class="post-title mb-4 text-lg">{{ post.title }}</h4>
          <p class="text-orange-400 mb-2 text-sm" v-if="post.category">{{ post.category.name }}</p>
          <ul class="tags flex flex-wrap gap-4 items-center">
              <li class="tag bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 block px-4 rounded-full text-xs mb-12" v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</li>
          </ul>
          <div class="my-4 text-center">
            <router-link 
            class="bg-orange-400 rounded-md px-3 py-1 text-sm absolute bottom-6 insert-x-2/4 -translate-x-2/4" 
            tag="button" 
            :to="{ name: 'posts.show',params: { slug:post.slug } }">Leggi</router-link>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: false
        }
    }
}
</script>

<style lang="scss" scoped>

</style>