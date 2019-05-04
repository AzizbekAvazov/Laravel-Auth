<div id="modal-wrapper" class="modal">
  <!-- modal is taken and after modified from here https://mdbootstrap.com/docs/jquery/modals/forms/-->
  <form class="modal-content animate" action="register_action" method="POST">
    
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="img/foodheart4.png" alt="Avatar" class="avatar">
         <h1 class="ml5">
          <span class="text-wrapper">
            <span class="line line1"></span>
            <span class="letters letters-left">Welcome</span>
            <span class="letters ampersand">to</span>
            <span class="letters letters-right">Yummy</span>
            <span class="line line2"></span>
          </span>
        </h1>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    @include('partials.anime_text')

    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname" required>
      <input type="email" placeholder="Enter Email" name="uemail" required>
      <input type="password" placeholder="Enter Password" name="psw" required> 
      <input type="password" placeholder="Confirm Password" name="cpsw" required>         
      <button type="submit">Register</button>
      <input type="checkbox" name="remember_me" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
</div>

  <!--Login form -->
<div id="modal-wrapper2" class="modal">
  <!-- modal is taken and after modified from here https://mdbootstrap.com/docs/jquery/modals/forms/-->
  <form class="modal-content animate" action="{{url('checklogin')}}" method="POST">

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="imgcontainer">
  <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
  <img src="img/foodheart4.png" alt="Avatar" class="avatar">
     <h1 class="ml52">
      <span class="text-wrapper">
        <span class="line2 line12"></span>
        <span class="letters2 letters-left2">Welcome</span>
        <span class="letters2 ampersand2">to</span>
        <span class="letters2 letters-right2">Yummy</span>
        <span class="line2 line22"></span>
      </span>
    </h1>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  @include('partials.anime_text2')

  </div>

  <div class="container">
  <input type="text" placeholder="Enter Username" name="uname2" required>
  <input type="password" placeholder="Enter Password" name="psw2" required>          
  <button type="submit">Login</button>
  <input type="checkbox" name="remember_me2" style="margin:26px 30px;"> Remember me      
  <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
  </div>

  </form>
</div>