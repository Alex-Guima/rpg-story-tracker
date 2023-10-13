import './bootstrap';

import {createApp} from 'vue'


import SignUpPage from '../components/SignUpPage/SignUpPage.vue'

import HomePage from '../components/HomePage/HomePage.vue'

createApp(HomePage).mount("#home")

createApp(SignUpPage).mount("#signUp")