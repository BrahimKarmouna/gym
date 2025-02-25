<template>
    <!-- Modal for creating insurance plan -->
    <CreateForm
        v-model:visible="is_visible"
        @saved="getInsurancePlans"
    />

    <q-btn
        @click="OpenModal"
        color="primary"
        label="Add Insurance Plan"
    >
        Add Insurance Plan
        <q-icon name="add" />
    </q-btn>

    <!-- Table for displaying insurance plans -->
    <q-table
        title="Insurance Plans"
        :rows="insurancePlans"
        :columns="columns"
        row-key="id"
    >
        <template v-slot:body-cell-actions="props">
            <q-td :props="props">
                <q-btn
                    color="negative"
                    label="Delete"
                    @click="deleteInsurancePlan(props.row.id)"
                />
            </q-td>
        </template>
    </q-table>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CreateForm from './CreateForm.vue';

// Visibility control for modal
const is_visible = ref(false);

// Open modal for creating an insurance plan
const OpenModal = () => {
    is_visible.value = true;
};

// Ref to hold insurance plan data
const insurancePlans = ref([]);

// Define columns for the insurance plan table
const columns = [
    { name: 'id', align: 'center', label: 'ID', field: 'id' },
    { name: 'name', align: 'center', label: 'Plan Name', field: 'name' },
    { name: 'price', align: 'center', label: 'Price', field: 'price' },
    { name: 'duration', align: 'center', label: 'Duration (months)', field: 'duration' },
    { name: 'actions', align: 'center', label: 'Actions', field: 'actions' },
];

// Fetch insurance plans from the API
const getInsurancePlans = () => {
    axios
        .get('/api/insurance-plans') // Endpoint for fetching insurance plans
        .then((response) => {
            insurancePlans.value = response.data;
        })
        .catch((error) => {
            console.error('Error fetching insurance plans:', error);
        });
};

// Delete an insurance plan based on ID
const deleteInsurancePlan = (id) => {
    axios
        .delete(`/api/insurance-plans/${id}`)
        .then(() => {
            console.log('Insurance plan deleted successfully.');
            getInsurancePlans(); // Refresh the list
        })
        .catch((error) => {
            console.error('Error deleting insurance plan:', error);
        });
};

// Fetch insurance plans on component mount
onMounted(() => {
    getInsurancePlans();
});
</script>
