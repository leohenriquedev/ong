<template>
    <form v-on:submit.prevent="addProvider">
        name: <input type="text" name="name" v-model="provider.name">
        Value: <input type="number" name="value" v-model="provider.value">
        <button type="submit">Add</button>
    </form>
</template>

<script>

import api from '../services/api';

export default {
    data: function () {
        return {
            provider: {
                name: '',
                value: ''
            },
            return: []
        }
    },
    methods: {
        addProvider: async function() {
            await api.post('http://localhost:8000/api/providers/new', this.provider).then(response => (this.return = response.data));
            this.provider.name = '';
            this.provider.value = '';
        }
    }
}
</script>
