<script setup>
import NavBar from '../../components/NavBar.vue';
</script>
<template>
    <div class="home">
        <div class="overlap-group-wrapper">
          <div class="overlap-group">
            <img class="pexels-photo-by" src="https://images.unsplash.com/photo-1514922121266-75835418bbf1?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            <NavBar />
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

  .home .pexels-photo-by {
    position: absolute;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
  }
  </style>
