<template>
    <div>
        <h1>Ваш заказ подтвержден</h1>
        <p>Номер заказа: {{ order.id }}</p>
        <ul>
            <li v-for="item in orderItems" :key="item.id">
                <strong>{{ item.product_name }}</strong> x{{ item.quantity }} - {{ item.total_price }} руб.
            </li>
        </ul>
        <p><strong>Общая сумма: </strong>{{ order.total_price }} руб.</p>
    </div>
</template>

<script>
export default {
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
