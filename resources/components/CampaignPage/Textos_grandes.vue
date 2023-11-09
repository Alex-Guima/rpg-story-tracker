<template>
    <div class="container">
        <div class="input-row">
          <div class="input-container">
            <textarea v-model="characters" placeholder="Insira os personagens que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
          <div class="input-container">
            <textarea v-model="npcs" placeholder="Insira os NPCs que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
        </div>
        <div class="input-row">
          <div class="input-container">
            <textarea v-model="monsters" placeholder="Insira os Monstros que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
          <div class="input-container">
            <textarea v-model="scenarios" placeholder="Insira os cenários que estarão nesse RPG..." class="custom-input"></textarea>
          </div>
        </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        characters: '',
        npcs: '',
        monsters: '',
        scenarios: ''
      };
    }
  };
  </script>

  <style scoped>
  .container {
    position: absolute;
    height: 100vh;
    top: calc(300px + 50px);

    margin-left: -70px;
  }



  .input-row {
    display: flex;
    flex-direction: row;
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
    padding: 10px;;
  }

  </style>
