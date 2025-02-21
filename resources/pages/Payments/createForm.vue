<template>
    <div class="q-pa-md q-gutter-sm">
        <q-dialog
            v-model="visible"
            persistent
        >
            <q-card style="min-width: 900px; height: 600px;">
                <q-card-section class="row justify-between items-center">
                    <div class="text-h6">Add Payment</div>
                    <q-btn
                        flat
                        round
                        dense
                        icon="close"
                        @click="closeModal"
                    />
                </q-card-section>

                <q-card-section class="q-pt-none">
                    <div class="row q-col-gutter-md">
                        <!-- Client Selection -->
                        <q-select
                            v-model="payment.client"
                            :options="clients"
                            label="Select Client"
                            filled
                            class="col-6 q-mb-md"
                            option-value="id"
                            option-label="Full_name"
                        />

                        <!-- Plan Selection -->
                        <q-select
                            v-model="payment.plan"
                            :options="plans"
                            label="Select Plan"
                            filled
                            class="col-6 q-mb-md"
                            option-value="id"
                            option-label="name"
                        />

                        <!-- Payment Date -->
                        <q-input
                            dense
                            v-model="payment.payment_date"
                            label="Payment Date"
                            type="date"
                            filled
                            class="col-6 q-mb-md"
                        />
                    </div>
                </q-card-section>

                <q-card-actions
                    align="right"
                    class="text-primary"
                >
                    <q-btn
                        flat
                        label="Cancel"
                        @click="closeModal"
                    />
                    <q-btn
                        flat
                        label="Save Payment"
                        @click="savePayment"
                    />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

// Visibility control
const visible = defineModel("visible", { default: false, type: Boolean });

// Payment form model
const payment = ref({
    client: null,  // Client ID will be selected here
    plan: null,    // Plan ID will be selected here
    payment_date: "2025-02-21"  // Default payment date
});

// Clients and plans data
const clients = ref([]);
const plans = ref([]);

// Fetch clients and plans data on component mount
onMounted(() => {
    // Fetch clients
    axios.get("/api/clients").then((response) => {
        clients.value = response.data;
    });

    // Fetch plans
    axios.get("/api/plans").then((response) => {
        plans.value = response.data;
    });
});

// Close modal and reset form state
const closeModal = () => {
    visible.value = false;
    resetPayment();
};

// Reset the payment form
const resetPayment = () => {
    payment.value = {
        client: null,
        plan: null,
        payment_date: new Date().toISOString().substr(0, 10), // Reset to today's date
    };
};

// Save payment to the backend
const savePayment = () => {
    // Sending the payment data (with selected client_id, plan_id, and payment_date)
    axios
        .post("/api/payments", payment.value)
        .then(() => {
            console.log("Payment saved successfully.");
            closeModal();  // Close the modal after saving
        })
        .catch((error) => {
            console.error("Error saving payment:", error);
        });
};
</script>
