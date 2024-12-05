<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",
    components: {
        Link,
    },
}
</script>

<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Post Index</h1>
        <div>
            <Link :href="route('post.create')" class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white">Add post</Link>
        </div>
    </div>
</template>

<style scoped>

</style>
