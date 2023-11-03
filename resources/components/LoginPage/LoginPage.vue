<script setup>
import LoginFrame from './LoginFrame.vue';

</script>

<template>
    <div class="background">
        <div class="container">
            <LoginFrame />
        </div>
    </div>
    
</template>

<style scoped>
    .container {
        display: flex;
        box-sizing: border-box;
        
        align-items: center;
        justify-content: center;
    }
    .background {
        background-image: url(https://images.unsplash.com/photo-1514539079130-25950c84af65?auto=format&fit=crop&q=80&w=2069&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
        background-position: 60%;
    }
</style>