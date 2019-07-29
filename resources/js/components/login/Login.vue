<template>
    <v-container>
        <v-form @submit.prevent="login">
            <v-text-field
                    v-model="form.email"
                    label="Enter your E-mail"
                    type="email"
                    required
            ></v-text-field>
            <v-text-field
                    v-model="form.password"
                    type="password"
                    label="Enter your password"
                    hint="At least 8 characters"
                    min="8"
            ></v-text-field>
            <v-btn color="blue" type="submit">Login</v-btn>
        </v-form>
    </v-container>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return{
                form: {
                    email: null,
                    password: null,
                },
            };
        },
        methods:{
            login(){
                User.login(this.form);
            }
        },
    }
</script>

<style scoped>

</style>