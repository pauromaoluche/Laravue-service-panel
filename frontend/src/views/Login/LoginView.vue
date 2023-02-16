<template>
  <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Sign in here</h3>
    <form @submit.stop.prevent="submit">
      <div class="inputBox">
        <input v-model="email" id="uname" type="text" name="Username" placeholder="Username">
        <input v-model="password" id="pass" type="password" name="Password" placeholder="Password">
      </div>
      <input type="submit" name="" value="Login">
    </form>
    <a href="#">Forget Password<br> </a>
    <div class="text-center">
      <p style="color: #59238F;">Sign-Up</p>
    </div>

  </div>
</template>
  
<script>

import api from '@/main'
export default {

  data() {
    return {
      email: '',
      password: ''
    };
  },

  methods: {
    submit() {
      api.post('/login', {
        email: this.email,
        password: this.password
      }).then((response) =>{
        console.log(response.data);
      }).catch((error) =>{
        console.log(error);
      })
    }
  }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>