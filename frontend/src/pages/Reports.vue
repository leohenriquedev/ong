<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" :key="client.id">
                    <td> {{ client.name }}</td>
                    <td> {{ client.value }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

import api from '../services/api';

export default {

    data: function() {
        return {
            clients: []
        }
    },
    mounted() {
        this.getClients();
    },
    methods: {
        getClients: async function() {
            await api.get('http://localhost:8000/api/clients').then(response => (this.clients = response.data));
        }
    }

}
</script>