<template>
    <div class="content">
        <div class="container">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <login-form/>
            </div>
        </div>
    </div>
</template>

<script>
    import LoginForm from './blocks/LoginForm'

    export default {
        name: 'user-login',
        components: { LoginForm }
    }
</script>

<style scoped>
    .content{
        padding: 150px 0;
    }
</style>
