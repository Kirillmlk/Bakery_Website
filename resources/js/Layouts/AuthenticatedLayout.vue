<script setup>
import { ref } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>

    <MainLayout>
        <div class="mt-10">
            <div class=" flex items-center sm:hidden mt-10">
                <button
                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path
                            :class="{hidden: showingNavigationDropdown,'inline-flex': !showingNavigationDropdown,}"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{ hidden: !showingNavigationDropdown,'inline-flex': showingNavigationDropdown, }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
            </div>

            <!-- Page Heading -->
            <header class="bg-white shadow text-center" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"/>

                </div>
            </header>
            <!-- Page Content -->
            <main>
                <slot/>
            </main>

    </MainLayout>
</template>
