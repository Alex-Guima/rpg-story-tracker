<script>
  export default {
    setup() {
    },
    components: { FormCadastro }
}

import FormCadastro from '../components/FormCadastro.vue';
import BtnCadastro from '../components/BtnCadastro.vue';
</script>


<template>

  <div class="container">
    <FormCadastro />
    <BtnCadastro />
  </div>

</template>

<style scoped>

  .container {
    justify-content: center;
    fill: #F9EEE5;
    filter: drop-shadow(0px 4px 6px rgba(0, 0, 0, 0.67));
    backdrop-filter: blur(2px);

    width: 831px;
    height: 805px;
  }

</style>
  