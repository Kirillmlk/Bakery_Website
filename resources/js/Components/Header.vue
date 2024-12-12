<script>
import {breadImages} from "@/assets/images.js";
import {Head, Link} from "@inertiajs/vue3";
import { defineComponent } from 'vue';


export default {
    name: "Header",
    components: {Link, Head},
    data() {
        return {
            breadImages,
        };
    },
    props: {
        canLogin: {
            type: Boolean,
            required: true,
        },
        canRegister: {
            type: Boolean,
            required: true,
        },
    },
};
</script>

<template>
    <header class="header" id="header" can-login can-register>
        <nav class="nav container">

            <a href="/" class="nav__logo">
                Bakery
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li class="nav__items">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__items">
                        <a href="#new" class="nav__link">News</a>
                    </li>

                    <li class="nav__items">
                        <a href="#about" class="nav__link">About us</a>
                    </li>

                    <li class="nav__items">
                        <Link
                            :href="route('post.index')"
                            class="nav__link"
                        >
                            Menu
                        </Link>
                    </li>

                    <li class="nav__items">
                        <a href="#visit" class="nav__link">Location</a>
                    </li>

                    <li v-if="canLogin" class="nav__items nav__items--auth">
                        <template v-if="$page.props.auth.user" class="nav__link">
                            <Link
                                :href="route('profile.edit')"
                                class="nav__link nav__link--auth"
                            >
                                Profile
                            </Link>
                        </template>

                        <template v-else class="nav__link">
                            <Link
                                :href="route('login')"
                                class="nav__link nav__link--auth"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="nav__link nav__link--auth ms-10"
                            >
                                Register
                            </Link>
                        </template>
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
/* Стили для компонента */
</style>
