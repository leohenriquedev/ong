<template>
    <form v-on:submit.prevent="addClient">
        name: <input type="text" name="name" v-model="client.name">
        Cost: <input type="text" name="cost" v-model="client.cost">
        <button type="submit">Add</button>
    </form>
</template>

<script>

// import api from '../services/api';

export default {
    data: function () {
        return {
            client: {
                name: '',
                cost: ''
            }
        }
    },
    methods: {
        addClient: async function() {
            console.log(this.client);
            // await api.post('http://localhost:3000/api/users', this.client);
        }
    }
}
</script>
