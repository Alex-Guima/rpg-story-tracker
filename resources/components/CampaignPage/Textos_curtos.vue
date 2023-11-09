<template>
  <div class="container">
      <input type="text" v-model="name" placeholder="Nome do seu RPG" class="custom-input"><br><br><br>
      <input type="text" v-model="theme" placeholder="Tema do seu RPG" class="custom-input">
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      theme: ''
    };
  }
};
</script>

<style scoped>
.container {
    position: absolute;
    display: flex;
    flex-direction: column;
}

.custom-input {
  width: 400px;
  height: 55px;
  font-size: 18px;
  border: 2px solid #d04b12;
}

</style>
