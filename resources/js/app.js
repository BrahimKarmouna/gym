import { createApp } from "vue";

import App from "./App.vue";
import { Quasar } from "quasar";
// Import icon libraries
import "@quasar/extras/material-icons/material-icons.css";
import "@quasar/extras/material-symbols-outlined/material-symbols-outlined.css";
import "@quasar/extras/fontawesome-v5/fontawesome-v5.css";
import "@quasar/extras/bootstrap-icons/bootstrap-icons.css";
import "quasar/src/css/index.sass";
import Login from "../pages/auth/login.vue";
const app = createApp(App);
import router from "../router/index"; // Import the router
import store from "../stores/permissions"; // Import your Vuex store
import { Dialog, Notify } from "quasar";
// Import Quasar styles and icons
import "@quasar/extras/material-icons/material-icons.css";
import "@quasar/extras/material-symbols-outlined/material-symbols-outlined.css";
import "@quasar/extras/bootstrap-icons/bootstrap-icons.css";
import "quasar/src/css/index.sass";

app.use(Quasar, {
    plugins: { Dialog, Notify }, // Explicitly import Quasar plugins here
});
app.use(store); // Register store
app.use(router); // Register router

// Register store before mounting
app.use(store);

// Register router before mounting
app.use(router);

// Register the Login component globally
app.component("Login", Login);

// Mount the app to the DOM
app.mount("#app");
