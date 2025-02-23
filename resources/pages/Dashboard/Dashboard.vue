<template>

    <ShowModal v-model:visible="ShowClient" :clients="clients"  />
  
    <div class="container items-center px-4 py-8 m-auto  md:">
        <div
            class="flex flex-wrap pb-3 bg-white divide-y rounded-sm shadow-lg xl:divide-x xl:divide-y-0"
        >
            <div class="w-full p-2 xl:w-1/4 sm:w-1/2">
                <div class="flex flex-col">
                    <div
                        class="flex flex-row items-center justify-between px-4 py-4"
                    >
                        <div class="flex mr-4">
                            <span
                                class="items-center px-4 py-4 m-auto bg-blue-200 rounded-full hover:bg-blue-300"
                            >
                            </span>
                        </div>
                        <div class="flex-1 pl-1">
                            <div class="text-xl font-medium text-gray-600">
                                6,427
                            </div>
                            <div class="text-sm text-gray-400 sm:text-base">
                                Active Sessions
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-px">
                        <div
                            class="w-full h-2 bg-gray-200 rounded-md hover:bg-gray-300"
                        >
                            <div
                                class="h-2 bg-blue-500 rounded-md hover:bg-blue-600"
                                style="width: 83%"
                            ></div>
                        </div>
                        <div
                            class="flex flex-row items-center justify-between w-full py-px text-base text-gray-400"
                        >
                            <p class="flex">change</p>
                            <div
                                class="flex items-center justify-between space-x-2"
                            >
                                <p>83%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 xl:w-1/4 sm:w-1/2">
                <div class="flex flex-col">
                    <div
                        class="flex flex-row items-center justify-between px-4 py-4"
                    >
                        <div class="flex mr-4">
                            <span
                                class="items-center px-4 py-4 m-auto bg-grey100 rounded-full hover:bg-grey-100"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="items-center w-8 h-8 m-auto text-white hover:text-grey-100"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                    />
                                </svg>
                            </span>
                        </div>
                        <div class="flex-1 pl-1">
                            <div class="text-xl font-medium text-gray-600">
                                78%
                            </div>
                            <div class="text-sm text-gray-400 sm:text-base">
                                Add to Cart
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-px">
                        <div
                            class="w-full h-2 bg-gray-200 rounded-md hover:bg-gray-300"
                        >
                            <div
                                class="h-2 bg-red-500 rounded-md hover:bg-red-600"
                                style="width: 78%"
                            ></div>
                        </div>
                        <div
                            class="flex flex-row items-center justify-between w-full py-px text-base text-gray-400"
                        >
                            <p class="flex">change</p>
                            <div
                                class="flex items-center justify-between space-x-2"
                            >
                                <p>78%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 xl:w-1/4 sm:w-1/2">
                <div class="flex flex-col">
                    <div
                        class="flex flex-row items-center justify-between px-4 py-4"
                    >
                        <div class="flex mr-4">
                            <span
                                class="items-center px-4 py-4 m-auto bg-yellow-200 rounded-full hover:bg-yellow-300"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="items-center w-8 h-8 m-auto text-yellow-500 hover:text-yellow-600"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                                    />
                                </svg>
                            </span>
                        </div>
                        <div class="flex-1 pl-1">
                            <div class="text-xl font-medium text-gray-600">
                                563
                            </div>
                            <div class="text-sm text-gray-400 sm:text-base">
                                Newsletter Sign Ups
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-px">
                        <div
                            class="w-full h-2 bg-gray-200 rounded-md hover:bg-gray-300"
                        >
                            <div
                                class="h-2 bg-yellow-500 rounded-md hover:bg-yellow-600"
                                style="width: 86%"
                            ></div>
                        </div>
                        <div
                            class="flex flex-row items-center justify-between w-full py-px text-base text-gray-400"
                        >
                            <p class="flex">change</p>
                            <div
                                class="flex items-center justify-between space-x-2"
                            >
                                <p>86%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 xl:w-1/4 sm:w-1/2">
                <div class="flex flex-col">
                    <div
                        class="flex flex-row items-center justify-between px-4 py-4"
                    >
                        <div class="flex mr-4">
                            <span
                                class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />
                                </svg>
                            </span>
                        </div>
                        <div class="flex-1 pl-1">
                            <div class="text-xl font-medium text-gray-600">
                                &#36;56,474
                            </div>
                            <div class="text-sm text-gray-400 sm:text-base">
                                Active Sessions
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pt-px">
                        <div
                            class="w-full h-2 bg-gray-200 rounded-md hover:bg-gray-300"
                        >
                            <div
                                class="h-2 bg-green-500 rounded-md hover:bg-green-600"
                                style="width: 79%"
                            ></div>
                        </div>
                        <div
                            class="flex flex-row items-center justify-between w-full py-px text-base text-gray-400"
                        >
                            <p class="flex">change</p>
                            <div
                                class="flex items-center justify-between space-x-2"
                            >
                                <p>79%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div
            class="ml-40 flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900"
        >
            <div class="ml-40">
                <button
                    id="dropdownActionButton"
                    data-dropdown-toggle="dropdownAction"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button"
                >
                    <span class="sr-only">Action button</span>
                    Action
                    <svg
                        class="w-2.5 h-2.5 ms-2.5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 4 4 4-4"
                        />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div
                    id="dropdownAction"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600"
                >
                    <ul
                        class="py-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownActionButton"
                    >
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >Reward</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >Promote</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >Activate account</a
                            >
                        </li>
                    </ul>
                    <div class="py-1">
                        <a
                            href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                            >Delete User</a
                        >
                    </div>
                </div>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div
                    class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none"
                >
                    <svg
                        class="w-4 h-4 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 20"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                        />
                    </svg>
                </div>
                <input
                    type="text"
                    id="table-search-users"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for users"
                />
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th
                        scope="col"
                        class="p-4"
                    >
                        <div class="flex items-center">
                            <input
                                id="checkbox-all-search"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            />
                            <label
                                for="checkbox-all-search"
                                class="sr-only"
                            >checkbox</label>
                        </div>
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3"
                    >id</th>
                    <th
                        scope="col"
                        class="px-6 py-3"
                    >Name</th>

                    <th
                        scope="col"
                        class="px-6 py-3"
                    >Phone</th>
                    <th
                        scope="col"
                        class="px-6 py-3"
                    >Asserance</th>
                    <th
                        scope="col"
                        class="px-6 py-3"
                    >Payment</th>
                    <th
                        scope="col"
                        class="px-6 py-3"
                    >Action</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="client in clients"
                    :key="client.id"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input
                                id="checkbox-table-search-1"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            />
                            <label
                                for="checkbox-table-search-1"
                                class="sr-only"
                            >checkbox</label>
                        </div>
                    </td>
                    <td class="px-6 py-4">#{{ client.id }}</td>
                    <th
                        scope="row"
                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        <img
                            :src="'storage/' + client.client_picture"
                            alt="Client Image"
                            class="w-12 h-12 rounded-full border border-gray-300 shadow-sm object-cover"
                        />
                        <div class="ps-3">
                            <div class="text-base font-semibold">
                                <button @click="showClient(client)">
                                    {{ client.Full_name }}
                                </button>
                            </div>
                            <div class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                {{ client.name }}
                            </div>
                            <div class="font-normal text-gray-500">
                                {{ client.email }}
                            </div>
                        </div>
                    </th>

                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            {{ client.phone }}
                            <div class="mb-1">
                                <q-icon name="phone_iphone"></q-icon>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div
                            class="flex items-center"
                            v-if="client.is_assured"
                        >
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                            Assuré
                        </div>
                        <div
                            class="flex items-center"
                            v-else
                        >
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                            Non assuré
                        </div>



                    </td>
                    <td class="px-6 py-4">

                        <div
                            v-if="client.is_payed"
                            class="flex items-center


                       "
                        >
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2">
                            </div>
                            payee
                        </div>

                        <div
                            class="flex items-center"
                            v-else
                        >
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
                            non payee
                        </div>
                    </td>
                    <td class="px-6 py-4 relative">  <!-- Add relative positioning to the <td> -->
<!-- Three-dot (Ellipsis) Action Button -->
<q-btn-dropdown dense unelevated  >
    <q-list class="" >
        <q-item clickable v-close-popup>
            <q-item-section>
                <q-item-label>Create Payment <q-icon name="attach_money" size ="sm" class="ms-1 " ></q-icon> </q-item-label>
            </q-item-section>
        </q-item>
        <q-item clickable v-close-popup>
            <q-item-section>
                <q-item-label>Create Inssurance  <q-icon name="shield" size ="sm" class="ms-1 " ></q-icon></q-item-label>
            </q-item-section>
        </q-item>
    </q-list>
</q-btn-dropdown>
</td>

                </tr>
            </tbody>
        </table>
    </div>
</template>
<script setup>
import axios from "axios";
import { ref } from "vue";

const clients = ref([]);
const ShowClient = ref(false);
function showClient() {
    ShowClient.value = true;
}
console.log(clients);

//axios get clients
axios
    .get("/api/clients")

    .then(function (response) {
        clients.value = response.data;
        // handle success
        console.log(response);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })
    .then(function () {
        // always executed
    });
</script>
