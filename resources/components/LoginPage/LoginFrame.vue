<script setup>
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
</script>

<template>
    <div class="container">
        <h1>RPG STORY TRACKER</h1>
        <FormLogin />
        <BtnLogin />
    </div>
    
</template>

<style>
    h1 {
        font-family: "Girassol"; 
        font-weight: 400;
        font-size: 58px;
    }
    .container {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>