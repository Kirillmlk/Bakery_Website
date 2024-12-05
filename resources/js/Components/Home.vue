<script>


import { breadImages } from "@/assets/images.js";
import ScrollReveal from 'scrollreveal';

export default {
    name: "Home",
    data() {
        return {
            breadImages,
        };
    },

};
</script>

<template>
    <section class="home section" id="home">
        <img :src="breadImages.bread15" alt="image" class="home__bg">
        <div class="home__shadow"></div>

        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Select The Best <br> Quality Breads
                </h1>
                <a href="#" class="button">Select Breads</a>

                <img :src="breadImages.bread7" alt="image" class="home__bread">
            </div>

            <div class="home__image">
                <img :src="breadImages.bread12" alt="image" class="home__img">
            </div>
            <footer class="home__footer">
                <div class="home__location">
                    <i class="ri-map-pin-line"></i>
                    <span>AV. The Sun #321 <br> Lima Peru</span>
                </div>
                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="ri-facebook-circle-line"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>
            </footer>
        </div>
    </section>
</template>

<style>

</style>
