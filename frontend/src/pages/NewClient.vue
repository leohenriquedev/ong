<template>
    <Form :data="client" v-on:submit-form="addClient"></Form>
</template>

<script>

import api from '../services/api';
import Form from '../components/Form';

export default {
    components: {
        Form
    },
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
        addClient: async function(data) {
            await api.post('http://localhost:8000/api/clients/new', data).then(response => (this.return = response.data));
            this.client.name = '';
            this.client.value = '';
        }
    }
}
</script>
