<script setup>
import FormField from './FormField.vue'
import FormPasswordField from './FormPasswordField.vue'


</script>


<template>

    <div class="background">

        <div class="container">

            <form action="" method="POST" class="form-cadastro">

                <label for="username"><span class="username-text">Username</span></label>
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
    .form-cadastro {
        box-sizing: border-box;
        
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;

        
    }

</style>
