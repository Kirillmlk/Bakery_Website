<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    components: {MainLayout},
    props: {
        orders: Array,
    },
};
</script>

<template>
    <MainLayout>
        <div class="max-w-4xl mx-auto mt-32 p-6 bg-gray-800 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-6 text-center text-white">Orders List</h1>
            <table class="table-auto w-full border-collapse border border-gray-700">
                <thead>
                <tr class="bg-gray-600">
                    <th class="border border-gray-700 px-4 py-2 text-white">Order ID</th>
                    <th class="border border-gray-700 px-4 py-2 text-white">User</th>
                    <th class="border border-gray-700 px-4 py-2 text-white">Total Price</th>
                    <th class="border border-gray-700 px-4 py-2 text-white">Created At</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="order in orders" :key="order.id" class="text-center odd:bg-gray-700 even:bg-gray-600">
                    <td class="border border-gray-700 px-4 py-2 text-white">{{ order.id }}</td>
                    <td class="border border-gray-700 px-4 py-2 text-white">{{ order.user.name }}</td>
                    <td class="border border-gray-700 px-4 py-2 text-white">{{ order.total_price }}</td>
                    <td class="border border-gray-700 px-4 py-2 text-white">{{ order.created_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </MainLayout>
</template>

<style>
</style>
