<script>
import FormCadastro from './SignUpForm.vue';
import RpgStoryTracker from './RpgStoryTracker.vue';


    export default {
    setup() {
    },
    components: { FormCadastro, RpgStoryTracker }
}

</script>

<template>

    <div class="sign-up">
      <RpgStoryTracker />
      <FormCadastro />
    </div>

</template>

<style>

.sign-up {
    background: #f9eee5;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
    width: 735px;
    height: auto;
  }


</style>