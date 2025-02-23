<template>
    <CreateForm v-model:visible="is_visible" />

    <q-btn @click="OpenModal" color="primary" label="Add Payment">
        Add Payment
        <q-icon name="add" />
    </q-btn>

    <q-table
        title="Payments"
        :rows="payments"
        :columns="columns"
        row-key="id"
    >
        <template v-slot:body-cell-actions="props">
            <q-td :props="props">
                <q-btn
                    color="negative"
                    label="Delete"
                    @click="deletePayment(props.row.id)"
                />
            </q-td>
        </template>
    </q-table>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CreateForm from './createForm.vue';

const is_visible = ref(false);

const OpenModal = () => {
    is_visible.value = true;
};

const payments = ref([]);


const columns = [
    { name: 'id', align: 'center', label: 'ID', field: 'id' },
    { 
        name: 'client_name', 
        align: 'center', 
        label: 'Client Name', 
        field: row => row.client ? row.client.Full_name : 'N/A' 
    },
    { 
/*************  ✨ Codeium Command ⭐  *************/
/**
 * Fetch all payments from the API.
 *
 * This function sends a GET request to `/api/payments` and updates the `payments` ref with the response data.
 *
 * @returns {Promise<void>} A promise that resolves when the request is complete.
 */
/******  0f31dfba-fab7-40b4-86c3-3f4268756e84  *******/        name: 'plan_name', 
        align: 'center', 
        label: 'Plan Name', 
        field: row => row.plan ? row.plan.name : 'N/A' 
    },
    { name: 'amount', align: 'center', label: 'Amount', field: row => row.plan ? row.plan.price : 'N/A' },
    { name: 'payment_date', align: 'center', label: 'Payment Date', field: 'payment_date' },
    { name: 'actions', align: 'center', label: 'Actions', field: 'actions' },
];



const getPayments = () => {
    axios
        .get('/api/payments')
        .then((response) => {
            payments.value = response.data;
       
         
        })
        .catch((error) => {
            console.error('Error fetching payments:', error);
        });
};

const deletePayment = (id) => {
    axios
        .delete(`/api/payments/${id}`)
        .then(() => {
            console.log('Payment deleted successfully.');
            getPayments();
        })
        .catch((error) => {
            console.error('Error deleting payment:', error);
        });
};

onMounted(() => {
    getPayments();
});
</script>
