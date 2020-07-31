<template>
    <form class="form" method="post" enctype="multipart/form-data" @keyup.enter="login()">
        <div class="card card-lock card-white text-center">
            <div class="card-header">
                <img src="/img/logo.png" alt="...">
            </div>
            <div class="card-body">
                <h4 class="card-title">PUSH-HER</h4>
                <div class="input-group":class="emailDanger">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fal fa-envelope"></i>
                        </div>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Логин или почта" v-model="email">
                </div>
                <div class="input-group" :class="passwordDanger">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fal fa-lock-alt"></i>
                        </div>
                    </div>
                    <input :type="showPass ? 'text' : 'password'" name="password" placeholder="Пароль" class="form-control exampleInputPassword" v-model="password">
                    <button class="showPass" type="button" @click="showPass = !showPass"><i id="showPassImg" :class="!showPass ? 'fal fa-eye-slash lock-position-input' : 'fal fa-eye lock-position-input'"></i></button>
                </div>
                <div v-if="field" class="my-0">
                    <i class="fal fa-exclamation-triangle text-danger"></i> <label class="text-danger">{{ message1 }}</label>
                </div>
                <div v-if="fail" class="my-0">
                    <i class="fal fa-exclamation-triangle text-danger"></i> <label class="text-danger">{{ message }}</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-info btn-lg btn-block mb-3" @click="login()" :disabled="block">Войти</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                showPass: false,
                email: '',
                password: '',
                fail: false,
                message: '',
                message1: 'Заполните обязательные поля',
                field: false,
                emailDanger: '',
                passwordDanger: '',
                block: false,
                sec: 0
            }
        },
        methods: {
            login(){
                if(this.email && this.password) {
                    axios.post('/login', {
                        email: this.email,
                        password: this.password
                    })
                        .then( response => {
                            window.location.href = window.location.origin + '/dashboard'
                        })
                        .catch( error => {
                        if(error.response.status === 422) {
                            this.fail = true;
                            this.message = 'Неправильный пароль или почта';
                            this.field = false;
                            this.emailDanger = false;
                            this.passwordDanger = false
                        }
                            else if(error.response.status === 429) {
                                this.block = true;
                                this.fail = true;
                                setInterval(e => {this.showError(error.response.data.errors.email[0])}, 1000);
                                this.field = false;
                                this.emailDanger = false;
                                this.passwordDanger = false;
                            }
                    })
                } else {
                    this.field = true;
                    this.fail = false;
                    if(!this.email){
                        this.emailDanger = 'has-danger'
                    }
                    if(!this.password){
                        this.passwordDanger = 'has-danger'
                    }
                }
            },
            showError(error){
                if (this.sec !== 0) {
                    if (this.sec === 1) {
                        this.block = false;
                        this.fail = false;
                    }
                    this.sec--;
                } else {
                    this.sec = error
                }
                let sec = this.sec;
                let minutes = Math.floor(sec / 60);
                let seconds = sec - minutes * 60;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                this.message = 'Аккаунт временно заблокирован!' + ' ' + minutes + ':' + seconds;
            }
        }
    }
</script>

<style scoped>
    .showPass {
        background-color: transparent;
        border: none;
        z-index: 5;
        position: absolute;
        right: 0;
        top: -2px;
    }
</style>
