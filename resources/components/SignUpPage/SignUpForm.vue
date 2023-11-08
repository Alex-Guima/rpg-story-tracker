<script>
import { router, useForm } from '@inertiajs/vue3';
import FormField from './FormField.vue'
import FormPasswordField from './FormPasswordField.vue'

export default {
    components: {
        FormPasswordField,
    },
    setup() {
        const form = useForm({
            username: {},
            email: {},
            password: {},
            confirmPassword: {},
        })
    return { form }
    },
    props: {
        errors: Object,
    }
}
</script>


<template>
        <div class="container">

            <form @submit.prevent="form.post(route('users.store'))" class="form-cadastro">

                <label for="username"><span class="username-text">Username</span></label>
                <input v-model="form.username" class="form-field" type="text">
                <div class="error-message">{{ errors.username }}</div>


                <label for="email">Enter your email</label>
                <input v-model="form.email" class="form-field" type="email">
                <div class="error-message">{{ errors.email }}</div>

                <label for="password">Enter your password</label>
                <input v-model="form.password" class="form-field" type="password">
                <div class="error-message">{{ errors.password }}</div>

                <label for="confirm-password">Confirm your password</label>
                <input v-model="form.confirmPassword" class="form-field" type="password">
                <div class="error-message">{{ errors.confirmPassword }}</div>

                <button class="btn-cadastro" type="submit">Create Account</button>
            </form>

        </div>
</template>


<style scoped>

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

        transition: 0.01s;

        color: var(--white);
        font-family: Inter;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: bold;
        line-height: 1.6;
  }

  .btn-cadastro:hover {
    background: var(--orange-800);
  }

  .btn-cadastro:active {
    box-shadow: black;
  }

  .form-field {
        box-sizing: border-box;

        width: 400px;
        display: flex;
        padding: 12px 16px;
        align-items: center;
        gap: 10px;
        background: #FEE5C1;
        border-radius: 4px;
        font-size: medium;
    }

    .form-field:focus {
        border: 2px solid var(--orange-800);
    }
    .form-field:hover {
        border: 2px solid var(--orange-800);
    }

    .error-message {
        color: red;
    }
</style>
