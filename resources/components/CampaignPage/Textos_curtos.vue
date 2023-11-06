<template>
    <div>
      <input type="text" v-model="texto" placeholder="Título do RPG" style="width: 651px; height: 60px; font-size: 20px;"><br><br><br>
      <input type="text" v-model="texto" placeholder="Tema do RPG" style="width: 651px; height: 60px; font-size: 20px;">
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