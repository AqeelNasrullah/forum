<template>
    <v-container style="height: 100vh; display: flex; flex-direction: column; justify-content: center;">
        <v-card
    width="400px"
    class="mx-auto"
  >

    <!-- <v-app-bar
      dark
      color="pink"
    >
        <v-icon>mdi-login</v-icon> &nbsp; &nbsp;
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Login Area</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>
    </v-app-bar> -->

    <v-container>
        <h1 class="mb-5 text-center"><v-icon color="black" size="35">mdi-account</v-icon> Register Here</h1>
        <v-form @submit.prevent="register">
            <v-text-field type="text" v-model="form.name" label="Name" outlined prepend-inner-icon="mdi-account"></v-text-field>
            <v-text-field type="email" v-model="form.email" label="Email" outlined prepend-inner-icon="mdi-email"></v-text-field>
            <v-text-field type="password" v-model="form.password" label="Password" outlined prepend-inner-icon="mdi-lock"></v-text-field>
            <v-text-field type="password" v-model="form.password_confirmation" label="Retype Password" outlined prepend-inner-icon="mdi-lock"></v-text-field>
            <v-btn color="pink" type="submit" class="white--text"><v-icon left dark>mdi-account</v-icon> Register</v-btn>
        </v-form>
        <v-row>
            <v-col cols="12" md="4"><router-link class="text-decoration-none" to="/">Back to Home</router-link></v-col>
            <v-col cols="12" md="8" class="text-right"><router-link class="text-decoration-none" to="/login">Already Registered? Login</router-link></v-col>
        </v-row>
    </v-container>
  </v-card>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                password_confirmation: null,
            }
        }
    },
    methods: {
        register() {
            alert(this.form.name)
        }
    }
}
</script>

<style>

</style>
