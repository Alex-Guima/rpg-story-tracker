
<script setup>
import { Head } from '@inertiajs/vue3'
import NavBar from '../../components/NavBar.vue';

</script>

<template>
    
    <NavBar />

    <div class="dice-roller">
      <h1 class="title">RPG Dice Roller</h1>
      <table class="dice-table">

        <thead>

        </thead>
        <tbody>
            <tr>
            <th>Tipo de Dado</th>
            <th>Quantidade</th>
            <th>Ação</th>
          </tr>
          <tr v-for="dice in availableDice" :key="dice">
            <td>{{ dice }}</td>
            <td>
              <div class="quantity-select">
                <select v-model="diceQuantities[dice]" class="orange-select">
                  <option v-for="n in 5" :key="n">{{ n }}</option>
                </select>
              </div>
            </td>
            <td>
              <button @click="rollDice(dice)" class="orange-button">Rolar</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="clear-button">
        <button @click="clearResults" class="black-button">Limpar Resultados</button>
      </div>
      <div class="results" v-if="results.length">
        <div v-for="(result, index) in results" :key="index" class="result">
          {{ result.quantity }} {{ result.diceType }}: {{ result.values.join(', ') }}
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        results: [],
        availableDice: ['d4', 'd6', 'd8', 'd10', 'd12', 'd20'],
        diceQuantities: {
          d4: 1,
          d6: 1,
          d8: 1,
          d10: 1,
          d12: 1,
          d20: 1,
        },
      };
    },
    methods: {
      rollDice(diceType) {
        const quantity = this.diceQuantities[diceType];
        const values = [];
  
        for (let i = 0; i < quantity; i++) {
          const diceValue = Math.floor(Math.random() * (parseInt(diceType.slice(1))) + 1);
          values.push(diceValue);
        }
  
        this.results.unshift({ quantity, diceType, values });
  
        if (this.results.length > 5) {
          this.results.pop();
        }
      },
      clearResults() {
        this.results = [];
      },
    },
  };
  </script>
  
  <style scoped>
  .dice-roller {
    text-align: center;
    padding: 20px;
    background-color: #333;  
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    color: #ff9900;
  }
  
  .title {
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  .dice-table {
    margin-top: 150px;
    width: 100%;
    text-align: center;
  }
  
  .dice-table th {
    padding: 10px;
    background-color: #ff9900;
    color: black;
  }
  
  .dice-table td {
    padding: 10px;
    background-color: white; /* Alterada para branca */
  }
  
  .quantity-select {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .dice-table select.orange-select {
    background-color: #ff9900;
    color: black;
    border: none;
    border-radius: 5px;
    padding: 5px;
    cursor: pointer;
  }
  
  .dice-table select.orange-select option {
    background-color: #ff9900;
    color: black;
  }
  
  .orange-button {
    background-color: #ff9900;
    color: black;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }
  
  .orange-button:hover {
    background-color: #ff7500;
  }
  
  .black-button {
    background-color: #1e1e1e;
    color: #ff9900;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }
  
  .black-button:hover {
    background-color: #333;
  }
  
  .results {
    margin-top: 20px;
  }
  
  .result {
    font-size: 18px;
    margin: 10px 0;
    background-color: #ff9900;
    color: black;
    border-radius: 5px;
    padding: 10px;
  }
  </style>