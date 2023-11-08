<script setup>
import TitleLogin from './TitleLogin.vue';
import BtnLogin from './BtnLogin.vue';
import FormLogin from './FormLogin.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container">
        <TitleLogin />
        <FormLogin />
        <div class="gap">
            <p>Create account <Link href="/signUp">here</Link></p>
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

        font-family: 'Montserrat', sans-serif;
        color: var(--white);
    }
    .gap {
        height: 80px;
    }

    p a{
        text-decoration: none;
        color: var(--orange-500);
    }
</style>
