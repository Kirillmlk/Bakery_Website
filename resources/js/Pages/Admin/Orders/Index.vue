<template>
    <div>
        <h1>Orders List</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Total Price</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order in orders" :key="order.id">
                <td>{{ order.id }}</td>
                <td>{{ order.user.name }}</td>
                <td>{{ order.total_price }}</td>
                <td>{{ order.created_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        orders: Array,
    },
};
</script>
