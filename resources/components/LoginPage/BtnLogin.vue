<script setup>
  
</script>

<template>

  <button class="login" type="submit"><span class="textoBtnlogin">Login</span></button>

</template>

<style scoped>
  .login {
    box-sizing: border-box;
    display: flex;
    width: 25rem;
    padding: 0.75rem 1rem;
    justify-content: center;
    align-items: center;

    background: var(--orange-500);
    box-shadow: 0 0.25rem 0.25rem 0 rgba(0, 0, 0, 0.25);
  }

  .textoBtnlogin {
    color: var(--white);
    font-family: 'Inter';
    font-size: 0.875rem;
    font-style: normal;
    font-weight: 600;
    line-height: 1.6;
  }
</style>
