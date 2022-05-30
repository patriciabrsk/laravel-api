<template>
    <div>
        <Post v-for="(post, index) in posts" :key="index" :post="post"/>
    </div>
</template>

<script>
import Post from '../components/Post.vue';
export default {
    name: 'App',
    data() {
        return {
            posts: [],
        }
    },
    components: { Post },
    methods: {
        getPosts() {
            axios.get('http://localhost:8000/api/posts')
            .then((response) => {
                this.posts = response.data;
            }).catch((error) => {
                console.error(error);
            })
        }
    },
    created() {

    }

}
</script>

<style scoped>

</style>
