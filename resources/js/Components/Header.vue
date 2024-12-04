<script>
import {breadImages} from "@/assets/images.js";

export default {
    name: "Header",
    data() {
        return {
            breadImages,
        };
    },
};
</script>

<template>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Bakery</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__items">
                        <a href="#home" class="nav__link active-link ">Home</a>
                    </li>

                    <li class="nav__items">
                        <a href="#new" class="nav__link">News</a>
                    </li>

                    <li class="nav__items">
                        <a href="#about" class="nav__link">About us</a>
                    </li>

                    <li class="nav__items">
                        <a href="#favorite" class="nav__link">Favorites</a>
                    </li>

                    <li class="nav__items">
                        <a href="#visit" class="nav__link">Location</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

                <img :src="breadImages.bread10" alt="image" class="nav__img-1">
                <img :src="breadImages.bread7" alt="image" class="nav__img-2">
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>
</template>

<style scoped>

</style>
