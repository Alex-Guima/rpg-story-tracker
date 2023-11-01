<script setup>
import RpgStoryTracker from '../RpgStoryTracker.vue';
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
</script>

<template>
    <div class="container">
        <RpgStoryTracker />
        <FormLogin />
        <BtnLogin />
    </div>
    
</template>

<style scoped>
    .container {
        display: flex;
        flex-direction: column;
        border-radius: 45px;
        align-items: center;
        justify-content: center;

        width: 830px;
        height: 805px;

        background-color: #F9EEE5;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.67);
    }
</style>