<template>
    <header>
        <nav>
            <ul class="flex align-center justify-center gap-8 py-4">
                <li>
                    <router-view to="/posts">Posts</router-view>
                </li>
                <li>
                    <router-view :to="{ name: 'contact' }">Contact</router-view>
                </li>
            </ul>
        </nav>
    </header>
    
</template>

<script>


</script>

<style lang="scss" scoped>

</style>