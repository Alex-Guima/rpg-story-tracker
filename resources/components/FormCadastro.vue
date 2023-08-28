<script setup>
import FormField from './FormField.vue'
import FormPasswordField from './FormPasswordField.vue'


</script>


<template>

    <div class="background">

        <div class="container">

            <form action="" method="POST" class="form-cadastro">

                <label for="username">Username</label>
                <FormField v-model:title="username"/>

                <label for="email">Enter your email</label>
                <FormField v-model:title="email"/>

                <label for="password">Enter your password</label>
                <FormPasswordField v-model:title="password"/>

                <label for="confirm-password">Confirm your password</label>
                <FormPasswordField v-model:title="confirmPassword"/>


            </form>

        </div>

    </div>

</template>


<style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 8px;

        width: 831px;
        height: 805px;

        fill: #F9EEE5;
        filter: drop-shadow(0px 4px 6px rgba(0, 0, 0, 0.67));
        backdrop-filter: blur(2px);

        border-radius: 45px;
    }

    .form-cadastro {
        justify-content: center;
        gap: 30px;
    }

</style>
