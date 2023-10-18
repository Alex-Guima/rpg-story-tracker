<script setup>
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
</script>

<template>
    <div class="container">
        <FormLogin />
        <BtnLogin />
    </div>
    
</template>

<style>
    .container {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>