<script setup>
import FormField from './FormField.vue'
import FormPasswordField from './FormPasswordField.vue'


</script>


<template>
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

                <input class="btn-cadastro" type="submit" value="Create Account">
            </form>

        </div>
</template>


<style>

    .form-cadastro {
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        line-height: 1.6;
        gap: 10px;
    }

    .btn-cadastro {
        box-sizing: border-box;
        display: flex;
        width: 400px;
        justify-content: center;
        align-items: center;
        padding: 12px 16px;
        margin: 20px 0px;

        border: 0;
        background: #D04B12;
        box-shadow: 0 0.25rem 0.25rem 0 rgba(0, 0, 0, 0.25);

        transition: 0.1s;

        color: #FFF;
        font-family: Inter;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 600;
        line-height: 1.6;
  }

  .btn-cadastro:hover {
    background: #e24806;
  }
  
  .btn-cadastro:active {
    box-shadow: black;
  }


</style>
