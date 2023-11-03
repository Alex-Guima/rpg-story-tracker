<script setup>
import RpgStoryTracker from './RpgStoryTracker.vue';

</script>

<template>
    <nav>
        <div class="left">
            <a href="/"><RpgStoryTracker  /></a>
        </div>
        <div class="right">
            <span class="about"><a href="/About">ABOUT</a></span>
            <a href=""><img src="../../public/User_Circle.svg" alt="User Icon"></a>
        </div>
    </nav>
</template>

<style scoped>

    nav {
        margin: 0;
        overflow: hidden;
        background-color: var(--gray-500);
        max-height: 130px;
        align-items: center;
    }

    nav a {
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: var(--orange-500);
        text-decoration: none;
        float: left;
    }

    .right {
        display: flex;
        float: right;
        align-items: center;
        margin-right: 75px;
    }

    .right img {
        height: 60px;
    }

    .left {
        align-items: center;
        max-width: fit-content;
        margin-left: 40px;
    }

    .about {
        margin-right: 50px;
        font-size: 18px;
    }
</style>
