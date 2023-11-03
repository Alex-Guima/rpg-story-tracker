import './bootstrap';

import {createApp} from 'vue'


import SignUpPage from '../components/SignUpPage/SignUpPage.vue'
import AboutPage from '../components/AboutPage/AboutPage.vue';
import HomePage from '../components/HomePage/HomePage.vue'

import LoginPage from '../components/LoginPage/LoginPage.vue'
import CampaignPage from '../components/CampaignPage/CampaignPage.vue';

createApp(HomePage).mount("#home")

createApp(SignUpPage).mount("#signUp")

createApp(LoginPage).mount("#login")

createApp(CampaignPage).mount("#campaign")

createApp(AboutPage).mount("#about")
