<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td> {{ user.name }}</td>
                    <td> {{ user.email }}</td>
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
            users: []
        }
    },
    mounted() {
        this.getData();
    },
    methods: {
        getData: async function() {
            await api.get('http://localhost:3000/api/users').then(response => (this.users = response.data));
        }
    }

}
</script>