import Dashboard from './components/views/Dashboard.vue';
import Register from './components/views/auth/Register.vue';
import Login from './components/views/auth/Login.vue';


export const routes = [
    {
        path:'/admin/dashboard',
        component:Dashboard
    },
    {
        path:'/auth/register',
        component:Register
    },
    {
        path:'/auth/login',
        component:Login
    },
 
];
