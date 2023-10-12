<script setup>
  
</script>

<template>

    <div class="container">
      <button class="login" type="submit"><span class="textoBtnlogin">Login</span></button>
    </div>

</template>

<style scoped>
  .login {
    box-sizing: border-box;
    display: flex;
    width: 25rem;
    padding: 0.75rem 1rem;
    justify-content: center;
    align-items: center;

    background: #D04B12;
    box-shadow: 0 0.25rem 0.25rem 0 rgba(0, 0, 0, 0.25);
  }

  .textoBtnlogin {
    color: #FFF;
    font-family: Inter;
    font-size: 0.875rem;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
  }

  .container {
    padding-left: 13.5rem;
    padding-bottom: 5rem;
  }
</style>
