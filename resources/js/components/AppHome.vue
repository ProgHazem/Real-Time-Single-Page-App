<template>
    <div>
        <toolbar></toolbar>
        <h1>Home</h1>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import toolbar from './toolbar';
    import AppFooter from './AppFooter';
    export default {
        name: "AppHome",
        components: {toolbar, AppFooter}
    }
</script>

<style scoped>

</style>