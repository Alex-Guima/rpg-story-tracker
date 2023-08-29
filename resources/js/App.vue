<script>
  export default {
    setup() {
    },
    components: { FormCadastro, RpgStoryTracker, SignUpFrame, BtnCadastro }
}

import FormCadastro from '../components/FormCadastro.vue';
import RpgStoryTracker from '../components/RpgStoryTracker.vue';
import SignUpFrame from '../components/SignUpFrame.vue';
import BtnCadastro from '../components/BtnCadastro.vue';

</script>


<template>

  <div class="container">
    <SignUpFrame />
  </div>

</template>

<style scoped>

  .container {
    box-sizing: border-box;
    display: flex;

    align-items: center;
    }

</style>
  