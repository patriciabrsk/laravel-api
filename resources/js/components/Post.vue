<template>
    <div class="card">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img :src="post.image_url" class="img-fluid rounded-start" :alt="post.title">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }} - {{ post.user_id }}</h5>
                        <p class="card-text">{{ post.content }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    components: {},
    props: ['post']
}
</script>

<style>

</style>
