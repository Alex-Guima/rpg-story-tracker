<script setup>
import SignUpForm from './SignUpForm.vue';
import RpgStoryTracker from '../RpgStoryTracker.vue';
</script>

<template>

    <div class="sign-up">
      <RpgStoryTracker />
      <SignUpForm />
    </div>

</template>

<style scoped>

.sign-up {
  font-family: 'Inter', sans-serif;
    background: #f9eee5;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    width: 735px;
    height: auto;
  }


</style>
