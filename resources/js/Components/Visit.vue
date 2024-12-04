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
    <section class="visit section" id="visit">
        <div class="visit__container">
            <img :src="breadImages.bread17" alt="image" class="visit__bg">
            <div class="visit__shadow"></div>

            <div class="visit__content container grid">
                <div class="visit__data">
                    <h2 class="section__title">Visit Us</h2>

                    <p class="visit__description">
                        Discover the best bread, we look forward
                        to your visit.
                    </p>

                    <a href="#" class="button">See Location</a>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>

</style>
