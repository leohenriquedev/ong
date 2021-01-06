<template>
    <div>
        <h5 class="d-flex justify-content-center mb-5 text-secondary">{{ title }}</h5>

        <table class="table table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th v-if="type == 'ong'">Tipo</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="info in data" :key="info.id">
                    <td> {{ info.name }}</td>
                    <td v-if="type === 'ong'">{{ info.type == 'client' ? 'entrada' : 'saída' }}</td>
                    <td> {{ info.value }}</td>
                </tr>
            </tbody>
            <tfoot v-if="type === 'ong'">
                <tr>
                    <td colspan="2"></td>
                    <th>Saldo {{ total }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String
        },
        type: {
            type: String
        },
        data: {
            type: Array
        },
        total: {
            type: Number
        }
    },
}
</script>