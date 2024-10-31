<template>
  <v-app>
    <v-navigation-drawer class="bg-teal-darken-4" theme="dark" permanent expand-on-hover rail>
      <v-list-item link to="/" title="Grid" prepend-icon="mdi-grid"></v-list-item>
      <v-list-item link to="/form" title="Form" prepend-icon="mdi-form-textbox"></v-list-item>
      <v-list-item link to="/card" title="Cards" prepend-icon="mdi-card"></v-list-item>
      <v-list-item link to="/alert" title="Alerts" prepend-icon="mdi-bell"></v-list-item>
      <v-list-item link to="/tabs" title="Tabs" prepend-icon="mdi-tab"></v-list-item>
      <v-list-item link to="/table" title="Tables" prepend-icon="mdi-table"></v-list-item>
    </v-navigation-drawer>
    <v-main>
      <AppBar />
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import AppBar from './components/AppBar.vue';
export default {
  name: 'App',
  components: {
    AppBar
  },
}
</script>