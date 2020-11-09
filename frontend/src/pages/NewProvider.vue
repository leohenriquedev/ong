<template>
    <Form :data="provider" v-on:submit-form="addProvider"></Form>
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
            provider: {
                name: '',
                value: ''
            },
            return: []
        }
    },
    methods: {
        addProvider: async function(data) {
            await api.post('http://localhost:8000/api/providers/new', data).then(response => (this.return = response.data));
            this.provider.name = '';
            this.provider.value = '';
        }
    }
}
</script>
