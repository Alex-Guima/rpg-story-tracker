<script setup>


</script>
<template>

        <form class="form">
            <label for="Usuario">Email or Username</label>
            <input type="text">

            <label for="Senha">Password</label>
            <input type="password">
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
  
</style>