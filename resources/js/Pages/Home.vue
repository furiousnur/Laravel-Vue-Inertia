<template>
    <MenuBar/>
    <h1>Home Page</h1>
    <br>
    <p>Name: {{data.name}}</p>
    <p>Age: {{data.age}}</p>
</template>
<script setup>
    import MenuBar from "../Component/MenuBar.vue";
    defineProps({data: String})
</script>
