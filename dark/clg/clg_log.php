<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
    <link rel="stylesheet" href="clg_log.css" />
    <title>Sign in & Sign up</title>
  </head>
  <body>
    <div class="boundry">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Login -->
          <form method="post" action="log.php" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
            <i class="fa-solid fa-pen"></i>
              <input type="text" name="scid" placeholder="School/College id" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div><br>

              <!-- login-button -->
              <button type="submit" name="submit" value="Login" class="btn">Login</button>
            
          </form>

          <!-- Sign Up -->

          <form action="reg.php" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2><br>
            <div class="input-field">
            <i class="fa-solid fa-pen"></i>
              <input type="text" name="scnm" placeholder="School/College Name" required/>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-building-columns"></i>
              <input type="text" name="scid" placeholder="School/College id" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div><br>
            
            <!-- Sign Up-button -->
            <button type="submit" name="signup" class="btn" value="Sign Up">Sign Up</button>
            
          </form>
        </div>
      </div>
      <!-- Another sign in-up -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign-Up First
              And Be Part Of Us! 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign Up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If You Are Already User Then Go For Login 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign In
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </div>
    

    <!-- Javascript-->

    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");
      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });
      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });
    </script>
  </body>
</html>
