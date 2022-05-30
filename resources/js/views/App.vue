<template>
    <div class="container-fluid">
        <div class="row">

            <PostList />
        </div>
    </div>
</template>

<script>
import PostList from '../components/PostList.vue';
export default {
    name: 'App',
    data() {
        return {
            posts: [],
        }
    },
    components: { PostList }

}
</script>

<style scoped>

</style>

