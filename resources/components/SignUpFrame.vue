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


        <div class="title">
            <RpgStoryTracker />
        </div>
        <div class="form">
            <FormCadastro />
        </div>
        <div class="button">
            <BtnCadastro />
        </div>

    </div>

</template>

<style>

.sign-up {
    box-sizing: border-box;

    border-radius: 45px;
    background: #F9EEE5;
    box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.67);
    backdrop-filter: blur(2px);

    width: 833px;
    height: 808px;


  }

  .form {
    box-sizing: border-box;
    display: flex;
    align-items: center;
  }


</style>