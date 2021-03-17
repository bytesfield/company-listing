require('./bootstrap');
require('alpinejs');
import Vue from 'vue';

//Import View Router
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//Routes
import {routes} from './routes';

//Components
import Header from './components/layout/guest/Header.vue';
import Footer from './components/layout/guest/Footer.vue';
import Home from './components/views/Home.vue';
// import Register from './components/views/auth/Register.vue';
// import Login from './components/views/auth/Login.vue';



//Register Routes
const router = new VueRouter({
    routes, 
    mode: 'history',

})


new Vue({
  Header,
  Footer,
  router,
  render: h => h(Home),
}).$mount('#app')
