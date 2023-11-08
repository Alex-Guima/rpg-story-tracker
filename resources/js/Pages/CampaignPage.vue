<script setup>
import CapaUploader from '../../components/CampaignPage/CapaUploader.vue';
import NavBar from '../../components/NavBar.vue';
import Textos_curtos from '../../components/CampaignPage/Textos_curtos.vue';
import Texto_Lore from '../../components/CampaignPage/Texto_Lore.vue';
import Textos_grandes from '../../components/CampaignPage/Textos_grandes.vue';

defineProps({
    currentPage: String,
})
</script>

<template>
    <div class="container">
        <NavBar />
        <div class="uploader">
            <CapaUploader />
        </div>
    </div>
</template>

<style scoped>

    .container {
        display: flex;
        flex-direction: column;
    
        font-family: 'Montserrat', sans-serif;
        color: var(--white);

    }

</style>
