window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Hangmanhome from './HangmanComponent/Hangmanhome';
import Hangmanplay from './HangmanComponent/Hangmanplay';

Vue.component('Hangmanhome', Hangmanhome);
Vue.component('Hangmanplay', Hangmanplay);

const router = new VueRouter({
    mode: 'history',
    base: '/games/hangman/index',
    routes: [
        {
            path: '/',
            component: Hangmanhome
        },
        {
            path: '/play',
            component: Hangmanplay
        }
    ]
});


const Hangman = new Vue({
    router,
    el: '#Hangman'
});
