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
                            <input type="password" v-model="form.password" placeholder="YOUR PASSWORD">
                            <p class="formErrors" v-if="formErrors && formErrors.password">{{ formErrors.password[0] }}</p>
                        </div>
                        <div class="submit-btn">
                            <a @click.prevent="submitForm" class="main-btn">
                                <span class="btn-text" type="submit">Click to Login</span>
                                <span class="btn-icon"><i class="fas fa-save"></i></span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="controls">
        <SideBar/>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import SideBar from "../../Component/SideBar.vue";

const form = {
    email: '',
    password: '',
};

const formErrors = ref(null);
const hasFormErrors = ref(false);

const submitForm = () => {
    axios
        .post('/login', form)
        .then((response) => {
            form.email = '';
            form.password = '';
            formErrors.value = null;
            hasFormErrors.value = false;
            window.location.href = '/admin/home';
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
    .formErrors {
        color: red;
    }
</style>
