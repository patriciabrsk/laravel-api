<template>
    <div class="container">
        <div class="row">
            <PostList />
        </div>
    </div>
</template>

<script>
import PostList from '../components/PostList.vue';
export default {
    name: 'App',
    components: { PostList }

}
</script>

<style scoped>

</style>

