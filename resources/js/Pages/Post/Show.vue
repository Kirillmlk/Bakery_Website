<script>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    props: ['post'],

    components: {
        MainLayout,
        Link,
    },
}
</script>

<template>
    <MainLayout>
        <div class="flex items-center justify-center min-h-screen ">
            <div class="w-96 rounded-lg shadow-md p-6 bg-gray-900">
                <div v-if="post">
                    <h1 class="favorite__title text-center">{{ post.title }}</h1>
                    <div class="mt-8 pt-8 border-t border-gray-400 text-center">
                        <span class="favorite__subtitle">{{ post.description }}</span>
                        <h3 class="favorite__price">${{ post.price }}</h3>

                        <div v-if="post.image">
                            <img :src="`/storage/${post.image}`" alt="Post Image" class="w-full mt-4 rounded">
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <Link :href="route('post.index')" class="text-sky-500 text-sm">Back</Link>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>
</style>
