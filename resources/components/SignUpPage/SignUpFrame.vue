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
    border-radius: 45px;
    background: #f9eee5b6;
    box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.67);
    backdrop-filter: blur(2px);

    width: 700px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
    
  }


</style>