<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import Header from "@/Components/Header.vue";
import Home from "@/Components/Home.vue";
import NewSection from "@/Components/NewSection.vue";
import About from "@/Components/About.vue";
import FavoriteSection from "@/Components/FavoriteSection.vue";
import Visit from "@/Components/Visit.vue";
import Footer from "@/Components/Footer.vue";
    export default {
        components: {MainLayout, Footer, Visit, FavoriteSection, About, NewSection, Home, Header},
        layout: MainLayout,
    }
</script>

<template>
    <MainLayout>
        <Header :canLogin="true" :canRegister="true" />
    <Home></Home>
    <NewSection></NewSection>
    <About></About>
    <FavoriteSection></FavoriteSection>
    <Visit></Visit>
    </MainLayout>
    <Footer></Footer>
</template>

<style>

</style>
//.bg-dots-darker {
//    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
//}
//@media (prefers-color-scheme: dark) {
//    .dark\:bg-dots-lighter {
//        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
//    }
//}
