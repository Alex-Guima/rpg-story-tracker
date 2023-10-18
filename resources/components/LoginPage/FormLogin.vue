<script setup>


</script>
<template>

        <form class="Formulario">
            <label for="Usuario">Email or Username</label>
            <input type="text">

            <label for="Senha">Password</label>
            <input type="password">
        </form>

</template>

<style>
    .Formulario input{
        box-sizing: border-box;

        width: 300px;
        display: flex;
        padding: 0.75rem 1rem;
        align-items: center;
        gap: 0.625rem;
        background: #FEE5C1;
        border-radius: 4px;
        font-size: medium; 
        border-color: #D04B12;
    }
  
</style>