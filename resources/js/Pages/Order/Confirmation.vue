<template>
    <div>
        <h1>Ваш заказ подтвержден</h1>
        <p>Номер заказа: {{ order.id }}</p>
        <ul>
            <li v-for="item in orderItems" :key="item.id">
                <strong>{{ item.product_name }}</strong> x{{ item.quantity }} - {{ item.total_price }} руб.
            </li>
        </ul>
        <p><strong>Total price: </strong>{{ order.total_price }} руб.</p>
    </div>
    <div class="mb-4">
        <Link :href="route('post.index')" class=" text-sky-500 text-sm mb-8">Back</Link>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    components: {Link},
    props: {
        order: Object,
    },
    computed: {
        orderItems() {
            return this.order.order_items || [];
        },
    },
};
</script>
