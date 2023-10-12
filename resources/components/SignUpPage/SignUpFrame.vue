<script>
import BtnCadastro from './BtnCadastro.vue';
import FormCadastro from './FormCadastro.vue';
import RpgStoryTracker from './RpgStoryTracker.vue';


    export default {
    setup() {
    },
    components: { FormCadastro, RpgStoryTracker, BtnCadastro }
}

</script>

<template>

    <div class="sign-up">
      <RpgStoryTracker />
      <FormCadastro />
      <BtnCadastro />
    </div>

</template>

<style>

.sign-up {
    box-sizing: border-box;

    border-radius: 2.8125rem;
    background: #F9EEE5;
    box-shadow: 0px 0.25rem 0.375rem 0px rgba(0, 0, 0, 0.67);
    backdrop-filter: blur(2px);

    width: 52.0625rem;
    height: 50.5rem;

    display: flex;
    flex-direction: column;
    
  }


</style>