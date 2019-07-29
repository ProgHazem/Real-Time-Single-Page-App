<template>
    <div>
        <toolbar></toolbar>
        <router-view>Error</router-view>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import toolbar from './toolbar';
    import AppFooter from './AppFooter';
    import Login from './login/Login';
    export default {
        name: "AppHome",
        components: {toolbar, Login, AppFooter}
    }
</script>

<style scoped>

</style>