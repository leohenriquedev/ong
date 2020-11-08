<template>
    <form v-on:submit.prevent="addClient">
        name: <input type="text" name="name" v-model="client.name">
        Value: <input type="number" name="value" v-model="client.value">
        <button type="submit">Add</button>
    </form>
</template>
