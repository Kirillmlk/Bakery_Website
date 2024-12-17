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
    <Header class="" can-register="" can-login=""></Header>
    <div>
        <main class="main">
            <slot />
        </main>
    </div>

</template>

<style >

</style>
