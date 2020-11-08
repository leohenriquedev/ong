import { createRouter, createWebHistory } from 'vue-router';
import NewClient from '@/pages/NewClient';
import NewProvider from '@/pages/NewProvider';
import Reports from '@/pages/Reports';

const routes =  [
    { 
        path: '/reports', 
        name: 'Reports', 
        component: Reports 
    },
    
    {
        path: '/client/new',
        name: 'NewClient',
        component: NewClient
    },

    {
        path: '/provider/new',
        name: 'NewProvider',
        component: NewProvider
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;