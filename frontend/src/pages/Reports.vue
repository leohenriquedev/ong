<template>
    <div class="d-flex justify-content-center pt-3">
        
        <div class="container col-md-8">
            
            <Table :title="'Maiores Receitas'" :type="'user'" :data="clients"></Table>
            <Table :title="'Maiores Custos'" :type="'user'" :data="providers"></Table>
            <Table :title="'Ong'" :type="'ong'" :data="ong" :total="currentPrice"></Table>
            
        </div>
    </div>
</template>

<script>

import api from '../services/api';
import Table from '../components/Table';

export default {

    components: {
        Table
    },
    data: function() {
        return {
            clients: [],
            providers: [],
            ong: [],
            currentPrice: 0
        }
    },
    created() {
        this.getClients();
        this.getProviders();
        this.getOngInfo();
    },
    methods: {
        getClients: async function() {
            await api.get('/clients').then(response => (this.clients = response.data));
        },
        getProviders: async function() {
            await api.get('/providers').then(response => (this.providers = response.data));
        },
        getOngInfo: async function() {
            await api.get('/ong/reports').then((response) => {
                this.ong = response.data.ong;
                this.currentPrice = response.data.currentPrice;
            });
        }
    }

}
</script>