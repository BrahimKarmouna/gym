<template>
    <!-- Modal for creating insurance -->
    <CreateForm
        v-model:visible="is_visible"
        @saved="getInsurances"
    />

    <q-btn
        @click="OpenModal"
        color="primary"
        label="Add Insurance"
    >
        Add Insurance
        <q-icon name="add" />
    </q-btn>

    <!-- Table for displaying insurances -->
    <q-table
        title="Insurance"
        :rows="insurances"
        :columns="columns"
        row-key="id"
    >
        <template v-slot:body-cell-actions="props">
            <q-td :props="props">
                <q-btn
                    color="negative"
                    label="Delete"
                    @click="deleteInsurance(props.row.id)"
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

// Open modal for creating insurance
const OpenModal = () => {
    is_visible.value = true;
};

// Ref to hold insurance data
const insurances = ref([]);

// Define columns for the insurance table
const columns = [
    { name: 'id', align: 'center', label: 'ID', field: 'id' },
    {
        name: 'client_name',
        align: 'center',
        label: 'Client Name',
        field: row => row.client ? row.client.Full_name : 'N/A'
    },
    {
        name: 'plan_name',
        align: 'center',
        label: 'Plan Name',
        field: row => row.plan ? row.plan.name : 'N/A'
    },
    { name: 'amount', align: 'center', label: 'Amount', field: row => row.plan ? row.plan.price : 'N/A' },
    { name: 'insurance_date', align: 'center', label: 'Insurance Date', field: 'payment_date' },
    { name: 'expiry_date', align: 'center', label: 'Expiry Date', field: 'expiry_date' },
    { name: 'actions', align: 'center', label: 'Actions', field: 'actions' },
];

// Fetch insurance data from the API
const getInsurances = () => {
    axios
        .get('/api/insurance')
        .then((response) => {
            insurances.value = response.data;
        })
        .catch((error) => {
            console.error('Error fetching insurance data:', error);
        });
};

// const getInsurancesPlans = () => {
//     axios
//         .get('/api/insurance-plans') // Assumes API returns { clients: [...], plans: [...] }
//         .then((response) => {
//             insurances.value = response.data.clients.flatMap(client =>
//                 client.insurances.map(insurance => ({
//                     id: insurance.id,
//                     client: client,
//                     plan: insurance.plan,
//                     payment_date: insurance.payment_date,
//                     expiry_date: insurance.expiry_date,
//                 }))
//             );
//         })
//         .catch((error) => {
//             console.error('Error fetching insurance data:', error);
//         });
// };


// // Delete insurance based on the ID
// const deleteInsurance = (id) => {
//     axios
//         .delete(`/api/insurance/${id}`)
//         .then(() => {
//             console.log('Insurance deleted successfully.');
//             getInsurances(); // Refresh the insurance list
//         })
//         .catch((error) => {
//             console.error('Error deleting insurance:', error);
//         });
// };

// // Fetch insurances on component mount
// onMounted(() => {
//     getInsurances();
// });
onMounted(() => {
    getInsurances();
});
</script>
