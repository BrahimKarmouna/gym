<template>
    <CreateForm v-model:visible="is_visivle" />
    <q-btn
        @click="OpenModal"
        color="primary"
        label="Add Payment"
    >
        Add Payment
        <q-icon name="add" />
    </q-btn>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CreateForm from './createForm.vue';
const is_visivle = ref(false);
const OpenModal = () => {
    is_visivle.value = true;
};
</script>
