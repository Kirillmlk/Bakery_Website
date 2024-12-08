<script>
import { Link } from "@inertiajs/vue3";

export default {
    name: "Index",

    props: ['post'],

    components: {
        Link,
    },
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Post Show</h1>
        <div v-if="post">
            <div class="mt-8 pt-8 border-t border-gray-400">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>description: {{ post.description }}</div>
                <div>price: {{ post.price }}</div>
                <div>created_at: {{ post.date }}</div>


                <!-- Отображение изображения -->
                <div v-if="post.image">
                    <img :src="`/storage/${post.image}`" alt="Post Image" class="w-full mt-4">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <Link :href="route('post.index')" class=" text-sky-500 text-sm mb-8">Back</Link>
        </div>
    </div>
</template>

<style scoped>
</style>
