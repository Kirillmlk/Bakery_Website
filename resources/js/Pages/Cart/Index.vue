<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    components: {Link, MainLayout},
    props: {
        cartItems: Array,
    },
    computed: {
        // Вычисляем общую стоимость всех товаров в корзине
        totalPrice() {
            return this.cartItems.reduce((sum, item) => {
                return sum + item.post.price * item.quantity;
            }, 0);
        },
    },
    methods: {
        updateItem(id, quantity) {
            this.$inertia.put(`/cart/${id}`, {quantity});
        },
        removeItem(id) {
            this.$inertia.delete(`/cart/${id}`);
        },
    },
};
</script>

<template>
    <MainLayout>
        <div class="favorite section container grid" id="favorite">
            <h1 class="favorite__title text-center">Cart</h1>
            <div v-if="cartItems.length">
                <div
                    v-for="item in cartItems"
                    :key="item.id"
                    class="flex justify-between items-center border-b py-2"
                >
                    <!-- Картинка слева -->
                    <div class="flex-shrink-0">
                        <div v-if="item.post.image">
                            <img
                                :src="`/storage/${item.post.image}`"
                                alt="Post Image"
                                class="w-16 h-16 object-cover"
                            />
                        </div>
                    </div>

                    <!-- Оставшаяся информация справа -->
                    <div class="flex-grow ml-4">
                        <h3 class="text-lg font-semibold">{{ item.post.title }}</h3>
                        <p class="text-gray-400"><strong>Quantity:</strong> {{ item.quantity }}</p>
                        <p class="text-gray-400"><strong>Quantity:</strong> {{ item.post.description }}</p>
                        <p class="text-gray-400"><strong>Price:</strong> ${{ item.post.price }}</p>
                        <p class="text-gray-400"><strong>Total:</strong> ${{ (item.post.price * item.quantity).toFixed(2) }}</p>
                    </div>

                    <div class="flex items-center space-x-2 ml-4">
                        <input
                            type="number"
                            v-model.number="item.quantity"
                            @change="updateItem(item.id, item.quantity)"
                            class="w-16 border rounded p-1"
                            min="1"
                        />
                        <button
                            @click="removeItem(item.id)"
                            class="text-red-500 hover:underline"
                        >
                            Delete
                        </button>
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <p class="text-lg font-semibold">Total amount: ${{ totalPrice.toFixed(2) }}</p>
                </div>
            </div>
            <p v-else>Your cart is empty</p>
        </div>
        <div class="mt-4 text-center">
            <Link :href="route('post.index')" class="text-sky-500 text-base">Back</Link>
        </div>
    </MainLayout>
</template>

<style>

</style>
