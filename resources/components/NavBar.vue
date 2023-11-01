<script setup>
import RpgStoryTracker from './RpgStoryTracker.vue';

</script>

<template>
    <nav>
        <RpgStoryTracker  />

        <div class="list-container">
            <ul>
                <li>Home</li>
                <li>Sobre Nós</li>
                <li><img src="../../public/User_Circle.svg" alt="User Symbol"></li>
            </ul>
        </div>
    </nav>
</template>

<style scoped>

    nav {
        display: flex;
        flex-direction: row;
        background-color: var(--gray-500);
        height: 150px;
        align-items: right;
    }

    .list-container ul {
        flex-direction: row;
        display: inline;
        align-self: right;
        list-style-type: none;
        float: right;
    }


    nav li {
        color: var(--orange-500);
        font-family: 'Montserrat', sans-serif;
    }

</style>
