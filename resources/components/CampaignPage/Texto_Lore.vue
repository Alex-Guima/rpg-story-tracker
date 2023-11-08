<template>
    <div class="container">
      <div class="centered-box">
        <textarea v-model="texto" placeholder="Insira aqui a lore do seu RPG..." class="custom-input"></textarea>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        texto: ''
      };
    }
  };
  </script>
  
  <style scoped>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .centered-box {
    text-align: center;
  }
  
  .custom-input {
    width: 600px;
    height: 400px;
    max-height: 400px; /* Altura máxima */
    font-size: 18px;
    border: 2px solid #d04b12;
    text-align: left; /* Alinha o texto no canto superior esquerdo */
    vertical-align: top; /* Alinha o texto verticalmente no topo */
    padding: 10px; /* Opcional: adicione um preenchimento interno para afastar o texto das bordas */
    overflow: auto; /* Adiciona rolagem quando o conteúdo excede a altura máxima */
  }
  
  </style>
  