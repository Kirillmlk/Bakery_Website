<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",

    components: {
        Link,
    },
    data() {
        return {
            title: '',
            description: '',
            price: '',
            image: null,
        }
    },

    props: [
        'errors'
    ],

    // methods: {
    //     store() {
    //         this.$inertia.post('/posts', {
    //             title: this.title,
    //             description: this.description,
    //             price: this.price,
    //             // image: this.image,
    //         });
    //     }
    // }

    methods: {
        handleFileUpload(event) {
            const file = event.target.files[0];
            if (file) {
                this.image = file;
            }
        },
        store() {
            const formData = new FormData();
            formData.append('title', this.title);
            formData.append('description', this.description);
            formData.append('price', this.price);
            formData.append('image', this.image);  // Отправка изображения

            this.$inertia.post('/posts', formData);
        }
    }
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form @submit.prevent="store" >
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-300 text-black" type="text" placeholder="title">
                <div v-if="errors.title" class="text-red-500 text-sm">{{ errors.title }}</div>
            </div>
            <div class="mb-4">
                <textarea v-model="description" class="w-full rounded border-gray-300 text-black" placeholder="content"></textarea>
                <div v-if="errors.description" class="text-red-500 text-sm">{{ errors.description }}</div>
            </div>
            <div class="mb-4">
                <input v-model="price" class="w-full rounded-full border-gray-300 text-black" type="text" placeholder="price">
                <div v-if="errors.price" class="text-red-500 text-sm">{{ errors.price }}</div>
            </div>
            <div class="mb-4">
                <input
                    @change="handleFileUpload"
                    class="w-full rounded-full border-gray-300"
                    type="file"
                    placeholder="image"
                >
                <div v-if="errors.image" class="text-red-500 text-sm">{{ errors.image }}</div>
            </div>
            <div class="mb-4">
                <button
                    class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white"
                    type="submit">
                    Store
                </button>
            </div>
            <div class="mb-4">
                <Link :href="route('post.index')" class=" text-sky-500 text-sm mb-8">Back</Link>
            </div>
        </form>
    </div>
</template>

<style>
</style>
