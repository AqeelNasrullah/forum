<template>
  <div>
    <v-app-bar
      color="deep-purple accent-4"
      dense
      dark
    >
      <!-- <v-app-bar-nav-icon></v-app-bar-nav-icon> -->

      <v-toolbar-title><router-link class="white--text text-decoration-none" to="/"><strong>ANWESOL Forum</strong></router-link></v-toolbar-title>

      <v-spacer></v-spacer>

      <router-link class="text-decoration-none" to="/"><v-btn text>Home</v-btn></router-link>
      <router-link class="text-decoration-none" to="/category"><v-btn text>Category</v-btn></router-link>
      <router-link class="text-decoration-none" to="/ask"><v-btn text>Ask Question</v-btn></router-link>
      <router-link class="text-decoration-none" to="/login"><v-btn text>Login</v-btn></router-link>
    </v-app-bar>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
