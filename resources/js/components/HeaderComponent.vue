<template>
    <header>
        <nav>
            <ul class="flex align-center justify-center gap-8 py-4">
                <li>
                    <router-link to="/posts">Posts</router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'contact' }">Contact</router-link>
                </li>
            </ul>
        </nav>
    </header>
    
</template>

<script>


</script>

<style lang="scss" scoped>

</style>