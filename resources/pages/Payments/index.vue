<template>
    <CreateForm />
    <q-btn>
        Add Payment
        <q-icon name="add" />
    </q-btn>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CreateForm from './createForm.vue';

</script>
