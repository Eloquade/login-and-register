<?php
   require APPROOT . '/views/includes/head.php';
?>
<img src="<?php echo URLROOT ?>/public/static/dist/Assets/wave.png" class="fixed hidden lg:block inset-0 h-full" style="z-index: -1;"/>
<div class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
  <img
    src="<?php echo URLROOT ?>/public/static/dist/Assets/unlock.svg"
    class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto"
  />
  <form class="flex flex-col justify-center items-center w-1/2" id="register-form" action="<?php echo URLROOT; ?>/users/login" method ="POST">
    <img src="<?php echo URLROOT ?>/public/static/dist/Assets/avatar.svg" class="w-32" />
    <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
     Welcome
    </h2>
    <div class="relative">
      <i class="fa fa-user absolute text-primarycolor text-xl"></i>
      <input
        type="text"
        placeholder="Username" name="username" autocomplete="off"
        class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
      />
    </div>
    <small class="text-red-600"><?php echo $data['usernameError']; ?></small>
    <div class="relative mt-8">
      <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
      <input
        type="password"
        placeholder="Password" name="password"
        class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-lg"
      />
    </div>
    <small class="text-red-600"><?php echo $data['passwordError']; ?></small>
    <br>
    <button 
      id="submit" 
      type="submit" 
      value="submit" 
      class="py-3 px-20 bg-primarycolor rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">
      Log in
    </button>
    <br>
    <p class="font-bold"><b class="text-gray-600">Not registered yet? </b><a href="<?php echo URLROOT; ?>/users/register" class="text-primarycolor" >Create an account!</a></p>
  </form>
</div>


