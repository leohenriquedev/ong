import { createWebHistory, createRouter } from 'vue-router';
import NewCost from '@/components/NewCost';

const routes =  [
    { path: '/cost/new', name: 'NewCost', component: NewCost }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;