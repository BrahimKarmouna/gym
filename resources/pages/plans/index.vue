<template>
    <h1>plans</h1>
</template>
<script setup >
import axios from 'axios';

const response = axios.get('/api/plans').then(response => {
    console.log(response);
})
</script>