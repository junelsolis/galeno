<template>
  <div class='login-form'>

    <div class='input-group'>
      <input type='text' v-model='email' placeholder='Email address' />
      <input type='password' v-model='password' placeholder='Password' @keyup.enter='submit' />
    </div>

    <div class='mt-4 text-center'>
      <bar-loader v-if='loading' class='mx-auto mt-2' color="#176AA6" :size="20"></bar-loader>
      <div class='rounded bg-white p-3 mb-4 flex items-center justify-center' v-if="message != ''">
        <p class='text-red-100 text-xs'>
          {{ message }}
        </p>
      </div>
      <button class='standard-button' v-if='!loading' @click='submit'><i class="fas fa-key mr-1"></i>Login</button>
    </div>


    <div class='link-block'>
      <a href=''>[ Forgot Password ]</a>
      <a href=''>[ About ]</a>
    </div>

  </div>

</template>

<style lang='scss'>

  .login-form {

    .link-block {
      @apply mt-8 text-center flex items-center justify-center;

      a {
        @apply mx-2 text-xs;
        transition-duration: 0.3s;
      }

      a:hover {
        @apply text-accent;
        transition-duration: 0.3s;
      }
    }

  }


</style>


<script>

    const axios = window.axios

    export default {

      data() {

        return {
          email: '',
          password: '',

          loading: false,
          message: '',
        }

      },

      methods: {
        submit() {

          this.message = ''
          this.loading = false

          if (this.email == '' || this.password == '') {

            this.message = 'Please fill in the required fields.'
            return

          }

          this.loading = true

          axios.post('/login', {
            email: this.email,
            password: this.password
          }).then(response => {

              if (response.data.status == 'OK') {
                window.location.href = '/app'
              }

              else {
                this.loading = false,
                this.message = response.data.message
              }

          })

        }

      }

    }

</script>
