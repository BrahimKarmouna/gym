<template>
    <div
        id="app"
        class="w-full h-full"
    >
        <!-- Layout wrapper -->
        <q-layout
            view="lHh LpR lFf"
            class="w-full h-full"
        >

            <!-- Header Section -->
            <div class="rounded-r bg-white border mb-7 xl:hidden flex justify-between w-full p-6 items-center">
                <div class="flex justify-between items-center space-x-3">
                    <img
                        class="w-12 h-12"
                        :src="Logo"
                        alt="logo"
                    />
                    <p class="text-2xl mb-0 leading-6 font-bold text-black"> Gym Managment</p>
                </div>
                <div
                    aria-label="toggler"
                    class="flex justify-center items-center"
                >
                    <button
                        aria-label="open"
                        id="open"
                        class="hidden focus:outline-none focus:ring-2"
                    >
                        <svg
                            class=""
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4 6H20"
                                stroke="black"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M4 12H20"
                                stroke="black"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M4 18H20"
                                stroke="black"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                    <q-avatar
                        v-if="isAuthenticated"
                        @click="menu = !menu"
                        size="40px"
                        class="cursor-pointer"
                    >
                        <img
                            src="https://avatars.githubusercontent.com/u/26676378?v=4"
                            alt="Profile Image"
                        />
                    </q-avatar>

                    <q-menu
                        v-model="menu"
                        auto-close
                        transition-show="scale"
                        transition-hide="scale"
                    >
                        <q-list class="w-36">
                            <q-item
                                clickable
                                class="w-36"
                            >
                                <q-item-section>
                                    <router-link to="/profile"> <span>My Profile</span> </router-link>
                                </q-item-section>
                            </q-item>
                            <q-item
                                clickable
                                class="w-36"
                            >
                                <q-item-section @click="handleLogout()">
                                    <span>Logout</span>
                                </q-item-section>
                            </q-item>
                        </q-list>
                    </q-menu>
                    <button
                        aria-label="close"
                        id="close"
                        class=" hidden focus:outline-none focus:ring-2 md: "
                    >
                        <q-btn @click="toggleDrawer">
                            <q-icon
                                color="black"
                                size="lg "
                                name="menu"
                            ><i class="fa-solid fa-xmark"></i></q-icon>
                        </q-btn>
                    </button>
                </div>
            </div>

            <!-- Sidebar Menu Sections -->
            <div class="flex w-full h-full">
                <!-- Sidebar fixe avec une largeur de 256px -->
                <div class="w-64">
                    <SidebarMenu :drawer="drawer" />
                </div>

                <!-- Contenu principal qui prend toute la largeur restante -->
                <div class="flex-1 h-full">
                    <q-page-container class="w-full h-full">
                        <q-page class="w-full h-full">
                            <router-view></router-view>
                        </q-page>
                    </q-page-container>
                </div>
            </div>

        </q-layout>
    </div>
</template>

<script setup>
import { h, ref } from "vue";
import SidebarMenu from "../components/SidebarMenu.vue";
import Logo from '../../resources/gym.png';
import router from "../router";

const drawer = ref(true);


function toggleDrawer() {
    drawer.value = !drawer.value;
}
const isAuthenticated = localStorage.getItem("auth_token");
const handleLogout = () => {
    // Remove the authentication token or any other data indicating user authentication
    localStorage.removeItem("auth_token");

    // Refresh the page to reflect the updated authentication state
    window.location.reload();

    // Optionally, you can redirect to login page explicitly
    // router.push({ name: "Login" });
};

</script>

<style scoped>
/* Assurez-vous que la mise en page prend toute la hauteur de l'écran */
html,
body,
#app {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
</style>
