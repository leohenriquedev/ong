<template>
    <Form :title="'Novo Cliente'" v-on:submit-form="addClient"></Form>
</template>

<script>

import api from '../services/api';
import Form from '../components/Form';

export default {
    components: {
        Form
    },
    methods: {
        addClient: async function(data) {
            await api.post('/clients/new', data).then(() => {
                this.$router.push('/');
            });
        }
    }
}
</script>
