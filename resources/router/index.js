import { createRouter, createWebHistory } from "vue-router";

// Import your components for routing
import Dashboard from "../pages/Dashboard/Dashboard.vue";
import NotFoundPage from "../pages/NotFoundPage.vue";
import Clients from "../pages/Client/Clients.vue";
import Plans from "../pages/plans/index.vue";
import Payments from "../pages/Payments/index.vue";
import Login from "../pages/auth/login.vue";
import Profile from "../profile/index.vue";

// Define your routes
const routes = [
    {
        path: "/",
        name: "Dashboard",
        component: Dashboard,
        meta: { requiresAuth: true }, // This page needs authentication
    },
    {
        path: "/:pathMatch(.*)*", // Catch-all route for 404
        name: "NotFound",
        component: NotFoundPage,
    },
    {
        path: "/clients",
        name: "Clients",
        component: Clients,
        meta: { requiresAuth: true }, // This page needs authentication
    },
    {
        path: "/plans",
        name: "Plans",
        component: Plans,
        meta: { requiresAuth: true }, // This page needs authentication
    },
    {
        path: "/payments",
        name: "Payments",
        component: Payments,
        meta: { requiresAuth: true }, // This page needs authentication
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path:"/profile",
        name:"Profile",
        component:Profile,
        meta: { requiresAuth: true },
    },
];

// Create and export the router instance
const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Add the navigation guard
router.beforeEach((to, from, next) => {
    const isAuthenticated = localStorage.getItem("auth_token"); // Check if the user is authenticated (example using a token in localStorage)

    // If the route requires authentication and the user is not authenticated
    if (to.meta.requiresAuth && !isAuthenticated) {
        next({ name: "Login" }); // Redirect to login page
    }
    // If the user is authenticated and tries to access the login page
    else if (to.name === "Login" && isAuthenticated) {
        next({ name: "Dashboard" }); // Redirect to home page (or wherever you want)
    } else {
        next(); // Allow navigation
    }
});

export default router;
