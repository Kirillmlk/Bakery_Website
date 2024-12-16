<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Корзина</h1>
        <div v-if="cartItems.length">
            <div
                v-for="item in cartItems"
                :key="item.id"
                class="flex justify-between items-center border-b py-2"
            >
                <div>
                    <h3 class="text-lg font-semibold">{{ item.post.title }}</h3>
                    <p class="text-gray-600">Количество: {{ item.quantity }}</p>
                </div>
                <div class="flex items-center space-x-2">
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
                        Удалить
                    </button>
                </div>
            </div>
        </div>
        <p v-else>Ваша корзина пуста</p>
    </div>
</template>

<script>
// import { Inertia } from "@inertiajs/inertia";

export default {
    props: {
        cartItems: Array,
    },
    methods: {
        updateItem(id, quantity) {
            this.$inertia.put(`/cart/${id}`, { quantity });
        },
        removeItem(id) {
            this.$inertia.delete(`/cart/${id}`);
        },
    },
};
</script>
