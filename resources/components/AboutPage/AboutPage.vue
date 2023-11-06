<script setup>
import NavBar from '../NavBar.vue';
</script>

<template>
    <div class="sobre">
        <NavBar />
        <img src="https://images.unsplash.com/photo-1514922121266-75835418bbf1?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dragon breathing fire atop a building">
        <div class="rectangle">
            <h2>Nosso objetivo com a página:</h2>
            <div class="cards">
                <div class="card">
                    <p>Apresentar uma interface simples, porém intuitiva e de fácil uso;</p>
                </div>
                <div class="card">
                    <p>Auxiliar Mestres de RPG a manter suas campanhas organizadas</p>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>
.sobre {
  display: flex;
  flex-direction: column;
}

img {
    box-sizing: border-box;
    overflow: hidden;
}

h2 {
    font-family: "Montserrat";
    font-weight: 500;
    color: #1f1919;
    font-size: 32px;
    text-align: center;
    line-height: 1.6;
    text-wrap: balance;
}

.rectangle {
    background-color: rgba(217, 217, 217, 0.7);
    display: flex;
    flex-direction: column;

    margin-top: -341px;
    height: 341px;
  }

  .card {
    height: 100px;
    width: 300px;
    padding: 25px;
    background-color: var(--orange-500);
    border-radius: 50px;
    box-shadow: 0px 4px 4px #00000060;
    text-align: center;
  }

  .cards {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 100px;
  }

  p {
    font-family: "Montserrat";
    font-weight: 500;
    color: #0e0e0e;
    font-size: 15px;
    text-align: center;
    line-height: 1.6;
  }
</style>
