<template>
    <form v-on:submit.prevent="addClient">
        name: <input type="text" name="name" v-model="client.name">
        Value: <input type="number" name="value" v-model="client.value">
        <button type="submit">Add</button>
    </form>
</template>

<script>

import api from '../services/api';

export default {
    data: function () {
        return {
            client: {
                name: '',
                value: ''
            },
            return: []
        }
    },
    methods: {
        addClient: async function() {
            await api.post('http://localhost:8000/api/clients/new', this.client).then(response => (this.return = response.data));
            this.client.name = '';
            this.client.value = '';
        }
    }
}
</script>
