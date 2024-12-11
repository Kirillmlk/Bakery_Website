<script>
import {Link} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    props: ['posts'],

    components: {
        MainLayout,
        Link,
    },

    methods: {
        deletePost(id) {
            this.$inertia.delete(`/posts/${id}`);
        }
    }
}
</script>

<template>
    <MainLayout>
        <section class="favorite section" id="favorite">
            <h2 class="section__title">Menu</h2>
            <div class="mb-8 flex justify-center">
                <Link :href="route('post.create')"
                      class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white">
                    Add post
                </Link>
            </div>

            <div v-if="posts" class="favorite__container container grid">
                <article v-for="post in posts" :key="post.id" class="favorite__card">
                    <div v-if="post.image">
                        <img :src="`/storage/${post.image}`" alt="Whole Grain Bread" class="favorite__img">
                    </div>
                    <div class="favorite__data">
                        <h2 class="favorite__title">{{ post.title }}</h2>
                        <span class="favorite__subtitle">{{ post.description }}</span>
                        <h3 class="favorite__price">${{ post.price }}</h3>
                    </div>

                    <button class="favorite__button button"><i class="ri-add-line"></i></button>
                    <Link :href="route('post.show', post.id)">More</Link>

                </article>
            </div>
        </section>
    </MainLayout>
</template>

<style>
</style>
