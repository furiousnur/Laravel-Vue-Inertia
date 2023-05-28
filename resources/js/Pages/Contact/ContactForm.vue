<template>
    <div>
        <form class="contact-form">
            <div class="input-control i-c-2">
                <input type="text" id="name" v-model="form.name" required placeholder="YOUR NAME">
                <input type="email" id="email" v-model="form.email" required placeholder="YOUR EMAIL">
            </div>
            <div class="input-control">
                <input type="text" id="subject" v-model="form.subject" required placeholder="ENTER SUBJECT">
            </div>
            <div class="input-control">
                <textarea id="message" v-model="form.message" cols="15" rows="8" placeholder="Message Here..."></textarea>
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
import { reactive, ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const form = reactive({
    name: null,
    email: null,
    subject: null,
    message: null,
});
const success = ref(false);
const submitForm = async () => {
    try {
        await Inertia.post('/contact', form);
        form.name = null;
        form.email = null;
        form.subject = null;
        form.message = null;
        success.value = true;
    } catch (error) {
        // Handle error
        console.error(error);
    }
};
</script>

<style scoped>
    .main-btn {
        cursor: pointer;
    }
    .success-message{
        margin-top: 5px;
    }
</style>
