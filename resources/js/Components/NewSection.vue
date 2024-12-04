<script >
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
    <section class="new section" id="new">
        <h2 class="section__title">New Breads</h2>

        <div class="new__container container grid">
            <div class="new__content grid">
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Rye Bread</h2>
                        <p class="new__description">
                            Baked with healthy, gluten-free
                            sourdough for good nutrition.
                        </p>
                    </div>

                    <img :src="breadImages.bread13" alt="img" class="new__img">
                </article>
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Whole Grain Bread</h2>
                        <p class="new__description">
                            Crispy and homemade prepared
                            from organic yeast-free flour.
                        </p>
                    </div>

                    <img :src="breadImages.bread14" alt="img" class="new__img">
                </article>
                <article class="new__card">
                    <div class="new__data">
                        <h2 class="new__title">Multigrain Bread</h2>
                        <p class="new__description">
                            Tasty and made with different
                            natural grains from the countryside.
                        </p>
                    </div>

                    <img :src="breadImages.bread16" alt="img" class="new__img">
                </article>
            </div>
            <a href="#" class="new__button button">See More Breads</a>
        </div>
    </section>
</template>

<style scoped>

</style>
