<template>
    <div class="d-flex justify-content-center pt-5">
        <div class="container col-md-8">

            <table class="table">
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
    </div>
</template>

<script>

import api from '../services/api';

export default {

    data: function() {
        return {
            clients: [],
            providers: [],
            ongInfo: [],
            currentPrice: 0
        }
    },
    mounted() {
        this.getClients();
        this.getProviders();
        this.getOngInfo();
    },
    methods: {
        getClients: async function() {
            await api.get('http://localhost:8000/api/clients').then(response => (this.clients = response.data));
        },
        getProviders: async function() {
            await api.get('http://localhost:8000/api/providers').then(response => (this.providers = response.data));
        },
        getOngInfo: async function() {
            await api.get('http://localhost:8000/api/ong/reports').then((response) => {
                this.ongInfo = response.data.ong;
                this.currentPrice = response.data.currentPrice;
            });
        }
    }

}
</script>