// src/stores/permissions.js
import { createStore } from 'vuex';

const store = createStore({
  state() {
    return {
      roles: [],
      permissions: [],
    };
  },
  mutations: {
    setRoles(state, roles) {
      state.roles = roles;
    },
    setPermissions(state, permissions) {
      state.permissions = permissions;
    },
  },
  actions: {
    loadRoles({ commit }, roles) {
      commit('setRoles', roles);
    },
    loadPermissions({ commit }, permissions) {
      commit('setPermissions', permissions);
    },
  },
  getters: {
    getRoles: (state) => state.roles,
    getPermissions: (state) => state.permissions,
  },
});

export default store; // Correctly export the store
