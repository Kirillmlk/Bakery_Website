<script>
import {Link} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Index",

    props: ['posts'], postId: Number,

    components: {
        MainLayout,
        Link,
    },

    methods: {
        addToCart(postId) {
            this.$inertia.post('/cart', {
                post_id: postId,
                quantity: 1,
            });
        },
        deletePost(id) {
            this.$inertia.delete(`/posts/${id}`);
        },
        isAdmin() {
            return this.$page.props.auth.user?.role === 'admin';
        },
    }
}
</script>

<template>
    <MainLayout>
        <section class="favorite section" id="favorite">
            <h2 class="section__title">Menu</h2>
            <div class="mb-8 flex justify-center" v-if="isAdmin()">
                <Link :href="route('post.create')"
                      class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white">
                    Add post
                </Link>
            </div>

            <div v-if="posts" class="favorite__container container grid">
                <article v-for="post in posts" :key="post.id" class="favorite__card flex flex-col justify-between h-full">
                    <div v-if="post.image">
                        <img :src="`/storage/${post.image}`" alt="Whole Grain Bread" class="favorite__img">
                    </div>
                    <div class="favorite__data">
                        <h2 class="favorite__title">{{ post.title }}</h2>
                        <span class="favorite__subtitle">{{ post.description }}</span>
                        <h3 class="favorite__price">${{ post.price }}</h3>
                    </div>


                    <button @click="addToCart(post.id)" class="favorite__button button">
                        <i class="ri-add-line"></i>
                    </button>

                    <div class="mt-auto text-left" v-if="isAdmin()">
                        <p @click="deletePost(post.id)" class="cursor-pointer text-red-500">Post Delete</p>
                        <Link :href="route('post.edit', post.id)" class="text-sky-500 text-sm mb-2">Edit</Link>
                    </div>

                    <div>
                        <Link :href="route('post.show', post.id)" class="text-sky-500 hover:underline">More</Link>
                    </div>
                </article>
            </div>
        </section>
    </MainLayout>
</template>

<style>
</style>
