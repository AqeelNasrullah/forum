<template>
    <div>
        <app-header></app-header>
        <v-container>
            <h1 class="text-center">Home</h1>
        </v-container>
        <app-footer></app-footer>
    </div>
</template>

<script>
import AppHeader from './Header';
import AppFooter from './Footer';

export default {
    components: { AppHeader, AppFooter }
}
</script>

<style>

</style>