<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",

    props: [
        'posts'
    ],

    components: {
        Link,
    },
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Post Index</h1>
        <div class="mb-8">
            <Link :href="route('post.create')"
                  class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white">
                Add post
            </Link>
        </div>
        <div v-if="posts">
            <div class="mt-8 pt-8 border-t border-gray-400" v-for="post in posts">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>description: {{ post.description }}</div>
                <div>price: {{ post.price }}</div>
                <div>image: {{ post.image }}</div>
                <div>created_at: {{ post.created_at }}</div>
                <div>updated_at: {{ post.updated_at }}</div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
