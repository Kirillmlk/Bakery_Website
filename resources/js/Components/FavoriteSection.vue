<script>
import { breadImages } from "@/assets/images.js";

export default {
    name: "FavoriteSection",
    data() {
        return {
            breadImages,
        };
    },
};
</script>

<template>
    <section class="favorite section" id="favorite">
        <h2 class="section__title">Customer Favorites</h2>

        <div class="favorite__container container grid">
            <article class="favorite__card">
                <img :src="breadImages.bread1" alt="Whole Grain Bread" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Whole Grain</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$6.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img :src="breadImages.bread2" alt="Rye Bread" class="favorite__img">

                <div class="favorite__data">
                    <h2 class="favorite__title">Rye</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$8.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img :src="breadImages.bread3" alt="White Bread" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">White</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$3.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img :src="breadImages.bread4" alt="Multigrain Bread" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Multigrain</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$5.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img :src="breadImages.bread5" alt="Sourdough Bread" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">Sourdough</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$7.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
            <article class="favorite__card">
                <img :src="breadImages.bread6" alt="French Bread" class="favorite__img">
                <div class="favorite__data">
                    <h2 class="favorite__title">French</h2>
                    <span class="favorite__subtitle">Bread</span>
                    <h3 class="favorite__price">$3.00</h3>
                </div>
                <button class="favorite__button button"><i class="ri-add-line"></i></button>
            </article>
        </div>
    </section>
</template>


<style scoped>

</style>
