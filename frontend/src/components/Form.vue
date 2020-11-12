<template>
    <form v-on:submit.prevent="submitForm">
        Name: <input type="text" name="name" v-model="dataForm.name" required>
        Value: <input type="number" name="value" v-model="dataForm.value" required>
        <button class="btn btn-success" type="submit">Add</button>
    </form>
</template>

<script>
export default {
    props: ['data'],
    data: function() {
        return {
            dataForm: this.data
        }
    },
    methods: {
        submitForm() {
            this.$emit('submit-form', this.dataForm);
        }
    }
}
</script>
