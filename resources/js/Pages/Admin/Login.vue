<template>
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="main-title">
                <h2>Login <span>Here</span><span class="bg-text">Admin</span></h2>
            </div>
            <div class="contact-content-con">
                <div class="right-contact">
                    <form class="contact-form">
                        <div class="input-control">
                            <input type="email" v-model="form.email" placeholder="YOUR EMAIL">
                            <p class="formErrors" v-if="formErrors && formErrors.email">{{ formErrors.email[0] }}</p>
                        </div>
                        <div class="input-control">
                            <input type="text" v-model="form.password" placeholder="YOUR PASSWORD">
                            <p class="formErrors" v-if="formErrors && formErrors.password">{{ formErrors.password[0] }}</p>
                        </div>
                        <div class="submit-btn">
                            <a @click.prevent="submitForm" class="main-btn">
                                <span class="btn-text" type="submit">Click to Login</span>
                                <span class="btn-icon"><i class="fas fa-save"></i></span>
                            </a>
                        </div>
                    </form>
                    <!-- Form markup -->
                    <div v-if="success" class="success-message">
                        Your message has been sent successfully
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = {
    email: '',
    password: '',
};

const success = ref(false);
const formErrors = ref(null);
const hasFormErrors = ref(false);

const submitForm = () => {
    axios
        .post('/login', form)
        .then((response) => {
            form.email = '';
            form.password = '';
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
