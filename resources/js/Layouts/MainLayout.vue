<script>
import Header from '../components/Header.vue';
export default {
    name: 'MainLayout',
    components: {
        Header,
    },
    data() {
        return {
            canLogin: true,
            canRegister: true,
        };
    },
}
</script>

<template>
    <div>
        <main class="main">
            <slot />
        </main>
    </div>
</template>

<style >

</style>
