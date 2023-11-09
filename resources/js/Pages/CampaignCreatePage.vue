<script setup>
import CapaUploader from '../../components/CampaignPage/CapaUploader.vue';
import NavBar from '../../components/NavBar.vue';
import Textos_curtos from '../../components/CampaignPage/Textos_curtos.vue';
import Texto_Lore from '../../components/CampaignPage/Texto_Lore.vue';
import Textos_grandes from '../../components/CampaignPage/Textos_grandes.vue';
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

defineProps({
    currentPage: String,
})

const form = reactive({
    name: null,
    theme: null,
    characters: null,
    npcs: null,
    monsters: null,
    scenarios: null,
    image: null,
});

const submit = () => {
    router.post('/campaigns', form)
}
</script>

<template>
    <form @submit="">
        <div class="container">
            <NavBar />
            <div class="uploader">
                <CapaUploader />
            </div>
            <div class="boxes">
                <Texto_Lore />
                <Textos_curtos />
                <Textos_grandes />
            </div>

            <button type="submit" class="submit-button">Salvar Campanha</button>
        </div>
    </form>
</template>

<style scoped>

    .container {
        position: relative;
        display: flex;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
    }

    .boxes {
        display: flex;
        flex-direction: row;
    }

    .submit-button {
        position: absolute;
        align-items: center;
        justify-content: center;
        top: 1200px;
        left: 80px;
        width: 200px;
        height: 50px;
        background-color: #D04B12;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

</style>
