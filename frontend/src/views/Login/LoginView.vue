<template>
  <div class="loginBox shadow p-3 mb-5 bg-body rounded"> 
    <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Sign in here</h3>
    <form @submit.stop.prevent="submit">
      <div class="inputBox">
        <input v-model="email" id="uname" type="text" name="Username" placeholder="Username">
        <input v-model="password" id="pass" type="password" name="Password" placeholder="Password">
      </div>
      <input type="submit" name="" value="Login">
    </form>
  </div>
</template>
  
<script>
import Cookie from 'js-cookie'
import api from '@/main'
export default {

  data() {
    return {
      email: 'ryan.colton@example.net',
      password: 'password'
    };
  },

  created() {
    Cookie.remove('_login_token');
  },

  methods: {
    submit() {
      api.post('/login', {
        email: this.email,
        password: this.password
      }).then((response) => {
        //Seta o cookie no navegador
        Cookie.set('_login_token', response.data.access_token);
        this.$router.push('/')
      }).catch((error) => {
        console.log(error);
      })
    }
  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>