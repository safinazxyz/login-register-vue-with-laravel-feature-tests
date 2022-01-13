<template>
    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
                <h5 class="text-uppercase text-center">Login</h5>
                <br><br>

                <form  @keydown="form.onKeydown($event)">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input v-model="form.email" type="email" name="email"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error style="margin:0;padding:0" class="alert alert-danger mt-1" :form="form" field="email"></has-error>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input v-model="form.password" type="password" name="password"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error style="margin:0;padding:0" class="alert alert-danger mt-1" :form="form" field="password"></has-error>
                    </div>

                    <div class="form-group flexbox py-10">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked
                                   v-model="form.remember">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me</span>
                        </label>

                        <a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-bold btn-block btn-primary"
                                @click.prevent="attemptLogin()"   :disabled="!isValidLoginForm" type="submit">Login</button>
                    </div>
                </form>
                <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a href="/register">Sign up</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    email: '',
                    password: '',
                    remember: true,
                    loading: false
                })
            }
        },
        methods: {
            attemptLogin() {
               this.form.loading = true
               this.form.post('/login')
                   .then(resp => {
                       location.reload()
                   }).catch(error => {
                   this.form.loading = false
               })
            }
        },
        computed: {
            isValidLoginForm() {
                return this.form.email && this.form.password && !this.form.loading
            }
        }
    }
</script>
