<template>
    <div class="container">
      <div class="centered-box">
        <div class="input-row">
          <div class="input-container">
            <textarea v-model="texto1" placeholder="Insira os personagens que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
          <div class="input-container">
            <textarea v-model="texto2" placeholder="Insira os NPCs que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
        </div>
        <div class="input-row">
          <div class="input-container">
            <textarea v-model="texto3" placeholder="Insira os Monstros que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
          <div class="input-container">
            <textarea v-model="texto4" placeholder="Insira os cenários que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        texto1: '',
        texto2: '',
        texto3: '',
        texto4: ''
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
  
  .input-row {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .input-container {
    margin: 10px;
  }
  
  .custom-input {
    width: 400px;
    height: 200px;
    max-height: 200px;
    font-size: 18px;
    border: 2px solid #d04b12;
    text-align: left;
    vertical-align: top;
    padding: 10px;
    overflow: auto;
  }
  
  </style>
  