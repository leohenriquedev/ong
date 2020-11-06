import { createRouter, createWebHistory } from 'vue-router';
import Cost from '@/pages/Cost';
import NewClient from '@/pages/NewClient';

const routes =  [
    { 
        path: '/cost', 
        name: 'Cost', 
        component: Cost 
    },
    
    {
        path: '/client/new',
        name: 'NewClient',
        component: NewClient
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;