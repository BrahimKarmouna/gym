<template>
    <div class="q-pa-md q-gutter-sm">
        <q-dialog
            v-model="visible"
            persistent
        >
            <q-card style="min-width: 600px; height: auto;">
                <q-card-section class="row justify-between items-center">
                    <div class="text-h6">Add Insurance Plan</div>
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
                        <!-- Plan Name -->
                        <q-input
                            v-model="insurancePlan.name"
                            label="Plan Name"
                            filled
                            class="col-12 q-mb-md"
                        />

                        <!-- Price -->
                        <q-input
                            v-model="insurancePlan.price"
                            label="Price"
                            type="number"
                            filled
                            class="col-6 q-mb-md"
                        />

                        <!-- Duration -->
                        <q-input
                            v-model="insurancePlan.duration"
                            label="Duration (Months)"
                            type="number"
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
                        label="Save Plan"
                        @click="saveInsurancePlan"
                    />
                </q-card-actions>
            </q-card>
        </q-dialog>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

// Visibility control
const visible = defineModel("visible", { default: false, type: Boolean });

// Insurance Plan form model
const insurancePlan = ref({
    name: "",
    price: 0,
    duration: 1, // Default duration in months
});

// Close modal and reset form state
const closeModal = () => {
    visible.value = false;
    resetInsurancePlan();
};

// Reset the form
const resetInsurancePlan = () => {
    insurancePlan.value = {
        name: "",
        price: 0,
        duration: 1,
    };
};

// Save Insurance Plan to the backend
const saveInsurancePlan = () => {
    axios
        .post("/api/insurance-plans", insurancePlan.value)
        .then(() => {
            console.log("Insurance Plan saved successfully.");
            closeModal(); // Close modal after saving
        })
        .catch((error) => {
            console.error("Error saving insurance plan:", error);
        });
};
</script>
