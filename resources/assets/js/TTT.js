window.Vue = require('vue');
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import TTThome from './TTTComponent/TTThome';
import TTTplay from './TTTComponent/TTTplay';
import TTTscore from './TTTComponent/TTTscore';

Vue.component('TTThome', TTThome);
Vue.component('TTTplay', TTTplay);
Vue.component('TTTscore', TTTscore);

const router = new VueRouter({
    mode: 'history',
    base: '/games/TTT/index',
    routes: [
        {
            path: '/',
            component: TTThome
        },
        {
            path: '/play',
            component: TTTplay
        },
        {
            path: '/score',
            component: TTTscore
        }
    ]
});


const TTT = new Vue({
    router,
    el: '#TTT'
});
