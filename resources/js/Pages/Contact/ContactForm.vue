<template>
    <div>
        <form class="contact-form">
            <div class="input-control">
                <input type="text" v-model="form.name" placeholder="YOUR NAME">
                <p v-if="hasFormErrors && formErrors && formErrors.name" class="formErrors">{{ formErrors.name[0] }}</p>
            </div>
            <div class="input-control">
                <input type="email" v-model="form.email" placeholder="YOUR EMAIL">
                <p class="formErrors" v-if="formErrors && formErrors.email">{{ formErrors.email[0] }}</p>
            </div>
            <div class="input-control">
                <input type="text" v-model="form.subject" placeholder="ENTER SUBJECT">
                <p class="formErrors" v-if="formErrors && formErrors.subject">{{ formErrors.subject[0] }}</p>
            </div>
            <div class="input-control">
                <textarea v-model="form.message" cols="15" rows="8" placeholder="Message Here..."></textarea>
                <p class="formErrors" v-if="formErrors && formErrors.email">{{ formErrors.message[0] }}</p>
            </div>
            <div class="submit-btn">
                <a @click.prevent="submitForm" class="main-btn">
                    <span class="btn-text" type="submit">Click to Send</span>
                    <span class="btn-icon"><i class="fas fa-save"></i></span>
                </a>
            </div>
        </form>
        <!-- Form markup -->
        <div v-if="success" class="success-message">
            Your message has been sent successfully
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = {
    name: '',
    email: '',
    subject: '',
    message: '',
};

const success = ref(false);
const formErrors = ref(null);
const hasFormErrors = ref(false);

const submitForm = () => {
    axios
        .post('/contact', form)
        .then((response) => {
            form.name = '';
            form.email = '';
            form.subject = '';
            form.message = '';
            success.value = true;
            formErrors.value = null;
            hasFormErrors.value = false;
        })
        .catch((error) => {
            if (error.response && error.response.data && error.response.data.errors) {
                formErrors.value = error.response.data.errors;
                hasFormErrors.value = true;
            }
        });
};
</script>

<style scoped>
    .main-btn {
        cursor: pointer;
    }
    .success-message {
        margin-top: 5px;
    }
    .formErrors {
        color: red;
    }
</style>
