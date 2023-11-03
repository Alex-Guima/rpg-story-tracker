<script setup>


    
</script>
<template>
    <div class="home">
        <div class="overlap-group-wrapper">
          <div class="overlap-group">
            <img class="pexels-photo-by" src="https://images.unsplash.com/photo-1514922121266-75835418bbf1?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            <div class="header-background"></div>
            <div class="nav">
              <a href="/" target="_blank" rel="noopener noreferrer"><div class="text-wrapper">HOME</div></a>
              <a href="/About" target="_blank" rel="noopener noreferrer"><div class="div">SOBRE</div></a>
              <a href="/Login" target="_blank" rel="noopener noreferrer"
              ><img class="material-symbols" src="../../../public/User_Circle.svg"
              /></a>
              <div class="text-wrapper-2">RPG STORY TRACKER</div>
            </div>
          </div>
        </div>
      </div>
</template>
  
<style scoped>
.home {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
}
  
  .home .overlap-group-wrapper {
    background-color: #ffffff;
    width: 100vh;
    height: 100vh;
  }
  
  .home .overlap-group {
    position: relative;
  }
  .home .header-background {
    position: absolute;
    width: 100vw;
    height: 16vh;
    background-color: #d9d9d9;
    box-shadow: 0px 4px 4px #00000040;
  }
  
  .home .nav {
    position: absolute;
    width: 92vw;
    height: 8.5vh;
    top: 4vh;
    left: 4vw;
  }
  
  .home .text-wrapper {
    position: absolute;
    height: 2.5vh;
    top: 3vh;
    left: 70vw;
    font-family: "Montserrat";
    font-weight: 500;
    color: #d04b12;
    font-size: 18px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .home .div {
    position: absolute;
    height: 2.5vh;
    top: 3vh;
    left: 79vw;
    font-family: "Montserrat";
    font-weight: 500;
    color: #d04b12;
    font-size: 18px;
    text-align: center;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .home .material-symbols {
    position: absolute;
    width: 60px;
    height: 60px;
    top: 0.8vh;
    left: 87vw;
  }
  
  .home .text-wrapper-2 {
    position: absolute;
    text-shadow: 0px 4px 4px #00000040;
    font-family: "Girassol";
    font-weight: 400;
    color: #1f1919;
    font-size: 7vh;
    letter-spacing: 0;
    line-height: normal;
    white-space: nowrap;
  }
  .home .pexels-photo-by {
    position: absolute;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
  }
  </style>