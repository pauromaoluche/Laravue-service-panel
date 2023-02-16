<template>
  <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Sign in here</h3>
    <form action="login.php" method="post">
      <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass"
          type="password" name="Password" placeholder="Password"> </div> <input type="submit" name="" value="Login">
    </form>
    <a href="#">Forget Password<br> </a>
    <div class="text-center">
      <p style="color: #59238F;">Sign-Up</p>
    </div>

</div>
</template>
  
<script>
export default {

}
</script>

<style lang="scss" src="./style.scss" scoped>
</style>