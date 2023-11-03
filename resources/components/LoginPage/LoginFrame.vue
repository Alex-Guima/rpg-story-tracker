<script setup>
import TitleLogin from './TitleLogin.vue';
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
</script>

<template>
    <div class="container">
        <TitleLogin />
        <FormLogin />
        <div class="gap">
            <p>Create account <a href="/SignUp">here</a></p>
        </div>
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
    }
    .gap {
        height: 80px;
    }
</style>