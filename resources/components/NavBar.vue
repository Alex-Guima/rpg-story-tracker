<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="header-background"></div>
    <div class="nav">
        <Link :href="route('pages.home')"><div class="text-wrapper">HOME</div></Link>
        <Link :href="route('pages.about')"><div class="sobre">ABOUT</div></Link>
        <Link :href="route('login.create')"
        ><img class="material-symbols" src="../../public/User_Circle.svg"
        /></Link>
        <div class="text-wrapper-2">RPG STORY TRACKER</div>
    </div>
</template>

<style scoped>
.header-background {
    position: absolute;
    width: 100vw;
    height: 16vh;
    background-color: #d9d9d9;
    box-shadow: 0px 4px 4px #00000040;
  }

.nav {
    position: absolute;
    width: 92vw;
    height: 8.5vh;
    top: 4vh;
    left: 4vw;
  }

  .material-symbols {
    position: absolute;
    width: 60px;
    height: 60px;
    top: 0.8vh;
    left: 87vw;
  }

  .text-wrapper {
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

  .text-wrapper-2 {
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

  .sobre {
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
</style>
