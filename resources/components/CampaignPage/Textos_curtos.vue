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
  height: 250px;
  margin-right: 850px;
}

.centered-box {
  text-align: center;
}

.custom-input {
  width: 450px;
  height: 65px;
  font-size: 18px;
  border: 2px solid #d04b12;
}

</style>