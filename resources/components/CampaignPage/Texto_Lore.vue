<template>
    <div class="container">
        <textarea v-model="lore" placeholder="Insira aqui a lore do seu RPG..." class="custom-input"></textarea>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        lore: ''
      };
    }
  };
  </script>

  <style scoped>
  .container {
    position: absolute;
    top: calc(300px + 50px);
    margin-left: 80px;
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
