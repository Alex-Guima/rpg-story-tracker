import './bootstrap';

import {createApp} from 'vue'


import SignUpPage from '../components/SignUpPage/SignUpPage.vue'

import HomePage from '../components/HomePage/HomePage.vue'

import LoginPage from '../components/LoginPage/LoginPage.vue'

createApp(HomePage).mount("#home")

createApp(SignUpPage).mount("#signUp")

createApp(LoginPage).mount("#login")