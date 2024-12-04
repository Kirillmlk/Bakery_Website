<script>
import {breadImages} from "@/assets/images.js";

export default {
    name: "NewSection",
    data() {
        return {
            breadImages,
        };
    },
};
</script>

<template>
    <section class="about section" id="about">
        <div class="about__container container grid">
            <div class="about__data ">
                <h2 class="section__title">About Us</h2>
                <p class="about__description">
                    We prepare all types of bread that are made at home,
                    maintaining the tradition of using only the best
                    ingredients made with local products whenever possible.
                    We have an extensive line of freshly prepared bakery
                    and coffee products.
                </p>

                <a href="" class="button">Know More</a>

                <img :src="breadImages.bread8" alt="image" class="about__bread">
            </div>

            <img :src="breadImages.bread11" alt="image" class="about__img">
        </div>
    </section>
</template>

<style>

</style>
