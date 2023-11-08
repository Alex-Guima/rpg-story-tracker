<template>
  <div class="container">
    <div class="centered-box">
      <input type="text" v-model="texto1" placeholder="Nome do seu RPG" class="custom-input"><br><br><br>
      <input type="text" v-model="texto2" placeholder="Tema do seu RPG" class="custom-input">
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      texto1: '',
      texto2: ''
    };
  }
};
</script>

<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 220px;
  margin-right: 900px;
}

.centered-box {
  text-align: center;
}

.custom-input {
  width: 400px;
  height: 55px;
  font-size: 18px;
  border: 2px solid #d04b12;
}

</style>