<template>
    <Form :title="'Novo Fornecedor'" v-on:submit-form="addProvider"></Form>
</template>

<script>

import api from '../services/api';
import Form from '../components/Form';

export default {
    components: {
        Form
    },
    methods: {
        addProvider: async function(data) {
            await api.post('/providers/new', data).then(() => {
                this.$router.push('/');
            });
            
        }
    }
}
</script>
