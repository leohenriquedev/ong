<template>
    <div class="d-flex justify-content-center mt-5">

        <div class="mt-3">
        <h5 class="mb-5 text-secondary">{{ title }}</h5>

            <form v-on:submit.prevent="submit">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" name="name" id="inputName" class="form-control" v-model="data.name" required>
                </div>
                <div class="mb-3">
                    <label for="inputValue">Valor</label>
                    <input type="number" name="value" id="inputValue" class="form-control" v-model="data.value" required>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </form>
            
        </div>
        
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String
        }
    },
    data: function() {
        return {
            data: {
                name: '',
                value: ''
            }
        }
    },
    methods: {
        submit() {
            this.$emit('submit-form', this.data);
        }
    }
}
</script>
