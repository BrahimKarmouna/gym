import { createRouter, createWebHistory } from 'vue-router';

// Import your components for routing
import Dashboard from '../pages/Dashboard.vue';
import AboutPage from '../pages/AboutPage.vue';
import NotFoundPage from '../pages/NotFoundPage.vue';
import Clients from  '../pages/Clients.vue';
import Plans from  '../pages/plans/index.vue';


// Define your routes
const routes = [
  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard,
  },
  {
    path: '/about',
    name: 'About',
    component: AboutPage,
  },
  {
    path: '/:pathMatch(.*)*', // Catch-all route for 404
    name: 'NotFound',
    component: NotFoundPage,
  },

  {
    path: '/clients',
    name: 'Clients',
    component: Clients,
  },
  

  {
      path:'/plans',
  name:'Plans',
  component:Plans
  }

];


// Create and export the router instance
const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
