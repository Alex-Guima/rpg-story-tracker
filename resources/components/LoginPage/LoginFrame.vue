<script setup>
import TitleLogin from './TitleLogin.vue';
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
import { Link } from '@inertiajs/vue3';

function router(route) {
    return route;
}
</script>

<template>
    <div class="container">
        <TitleLogin />
        <FormLogin />
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

        font-family: 'Montserrat', sans-serif;
        color: var(--white);
    }
</style>
