<template>
    <div>
        <Post v-for="(post, index) in posts" :key="index" :post="post"/>
        <!-- <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item" v-if="pagination.currentPage > 1" @click="getPosts(pagination.currentPage - 1)">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">{{ pagination.currentPage }}</a>
                </li>
                <li class="page-item" v-if="pagination.currentPag < pagination.lastPage" @click="getPosts(pagination.currentPage + 1)">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> -->

    </div>
</template>

<script>
import Post from '../components/Post.vue';
export default {
    name: 'App',
    data() {
        return {
            posts: [],
            pagination: {}
        }
    },
    components: { Post },
    methods: {
        getPosts(page) {
            axios.get(`http://localhost:8000/api/posts?page=${page}`)
            .then((response) => {
                console.log(response.data);
                this.posts = response.data.data;
                const { current_page, last_page } = response.data;
                this.pagination = {
                    currentPage = current_page,
                    lastPage = last_page
                };
            }).catch((error) => {
                console.error(error);
            })
        }
    },
    created() {
        this.getPosts(1);
    }

}
</script>

<style scoped>

</style>
