<script setup>
    import { Link, router } from '@inertiajs/vue3';
    import { reactive } from 'vue';


    const form = reactive({
        email: null,
        password: null,
    });

    function submit() {
        router.post('/login', form);
    }

</script>
<template>

        <form @submit.prevent="submit" class="form">
            <label for="email">Email</label>
            <input v-model="form.email" type="text" name="email">

            <label for="password">Password</label>
            <input v-model="form.password" type="password" name="password">

            <div class="gap">
                <p>Create account <Link class="text" :href="route('users.create')">here</Link></p>
            </div>

            <button class="btnLogin" type="submit"><span class="textoBtnlogin">Login</span></button>
        </form>

</template>

<style scoped>
    .form{
        display: flex;
        flex-direction: column;
    }
    .form input{
        box-sizing: border-box;
        width: 400px;
        height: 48px;
        background-color: #FEE5C1;
        border-radius: 4px;
        border-color: #D04B12;
        line-height: 1.6;
    }

    .btnLogin {
    box-sizing: border-box;
    width: 25rem;
    padding: 0.75rem 1rem;
    background: var(--orange-500);
    box-shadow: 0 0.25rem 0.25rem 0 rgba(0, 0, 0, 0.25);
  }

  .textoBtnlogin {
    color: var(--white);
    font-family: 'Montserrat';
    font-size: 0.875rem;
    font-style: normal;
    font-weight: 600;
    line-height: 1.6;
  }

  .gap {
        height: 80px;
    }

    .text {
        text-decoration: none;
        color: var(--orange-500);
    }
</style>
