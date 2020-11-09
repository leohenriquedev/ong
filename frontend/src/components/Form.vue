<template>
    <form v-on:submit.prevent="submitForm">
        Name: <input type="text" name="name" v-model="dataForm.name">
        Value: <input type="number" name="value" v-model="dataForm.value">
        <button type="submit">Add</button>
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
