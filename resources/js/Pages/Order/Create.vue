<template>
    <div>
        <h1>Create Order</h1>
        <form @submit.prevent="submitOrder">
            <div v-for="(item, index) in cart" :key="index">
                <p>{{ item.product_name }} - Quantity: {{ item.quantity }} - Price: {{ item.price }}</p>
            </div>

            <div>
                <label for="total_price">Total Price:</label>
                <input type="number" v-model="totalPrice" readonly />
            </div>

            <div>
                <button type="submit" :disabled="loading">Place Order</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        cart: Array, // Корзина товаров, переданная из Laravel
    },
    data() {
        return {
            totalPrice: this.calculateTotalPrice(),
            loading: false,
        };
    },
    methods: {
        calculateTotalPrice() {
            return this.cart.reduce((total, item) => total + item.total_price, 0);
        },
        async submitOrder() {
            this.loading = true;

            try {
                await this.$inertia.post(this.route('orders.store'), {
                    cart: this.cart,
                    total_price: this.totalPrice,
                    user_id: this.$page.props.auth.user.id,
                });
            } catch (error) {
                console.error(error);
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>
