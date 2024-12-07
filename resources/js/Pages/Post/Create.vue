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
            this.image = event.target.files[0];
        },
        store() {
            const formData = new FormData();
            formData.append('title', this.title);
            formData.append('description', this.description);
            formData.append('price', this.price);
            formData.append('image', this.image);

            this.$inertia.post('/posts', formData);
        }
    }
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form @submit.prevent="store">
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-300 text-black" type="text" placeholder="title">
            </div>
            <div class="mb-4">
                <textarea v-model="description" class="w-full rounded border-gray-300 text-black" placeholder="content"></textarea>
            </div>
            <div class="mb-4">
                <input v-model="price" class="w-full rounded-full border-gray-300 text-black" type="text" placeholder="price">
            </div>
            <div class="mb-4">
                <input
                    @change="handleFileUpload"
                    class="w-full rounded-full border-gray-300"
                    type="file"
                    placeholder="image"
                >
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
