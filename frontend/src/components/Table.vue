<template>
    <div>
        <h5 class="d-flex justify-content-center mb-5 text-secondary">{{ title }}</h5>

        <table class="table table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="info in data" :key="info.id">
                    <td> {{ info.name }}</td>
                    <td> {{ info.value }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String
        },
        data: {
            type: Array
        }
    }
}
</script>