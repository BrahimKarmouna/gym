<template>
    <q-layout view="lHh Lpr lFf" class="shadow-2 rounded-borders h-screen">
        <q-header bordered class="bg-grey-3 text-primary">
            <q-toolbar>
                <q-toolbar-title class="text-center">
                    <q-avatar>
                        <q-icon size="xl" name="fitness_center" color="primary" />
                    </q-avatar>
                    Gym Manager
                    <q-btn class="justify-end" flat @click="drawer = !drawer" round dense icon="menu" />
                </q-toolbar-title>
            </q-toolbar>
        </q-header>

        <q-drawer
            v-model="drawer"
            show-if-above
            :width="200"
            :breakpoint="500"
            class="bg-green-500 text-primary"
            hieght="50vh"
        >
            <q-scroll-area style="height: calc(100% - 150px); margin-top: 150px; border-right: 1px solid #ddd">
                <q-list padding>
                    <q-item clickable v-ripple>
                        <q-item-section avatar>
                            <q-icon name="inbox" />
                        </q-item-section>
                        <q-item-section>Inbox</q-item-section>
                    </q-item>

                    <q-item active clickable v-ripple>
                        <q-item-section avatar>
                            <q-icon name="star" />
                        </q-item-section>
                        <q-item-section>Star</q-item-section>
                    </q-item>

                    <q-item clickable v-ripple>
                        <q-item-section avatar>
                            <q-icon name="send" />
                        </q-item-section>
                        <q-item-section>Send</q-item-section>
                    </q-item>

                    <q-item clickable v-ripple>
                        <q-item-section avatar>
                            <q-icon name="drafts" />
                        </q-item-section>
                        <q-item-section>Drafts</q-item-section>
                    </q-item>
                </q-list>
            </q-scroll-area>

            <q-img class="absolute-top" src="https://cdn.quasar.dev/img/material.png" style="height: 150px">
                <div class="absolute-bottom bg-transparent">
                    <q-avatar size="56px" class="q-mb-sm">
                        <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                    </q-avatar>
                    <div class="text-weight-bold">Razvan Stoenescu</div>
                    <div>@rstoenescu</div>
                </div>
            </q-img>
        </q-drawer>

        <q-page-container class="bg-yellow-600">
            <q-page class="h-full w-full bg-black">
                <router-view></router-view>
            </q-page>
        </q-page-container>
    </q-layout>
</template>