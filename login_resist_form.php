<!DOCTYPE HTML>
<html>
    <head>
        <title>login / register</title>
        <link rel="stylesheet" href="css/register.css">
    </head>
    <body>
      <?php
      session_start();
      $conn = new mysqli("localhost", "emawlrdl11", "project11*", "emawlrdl11");
      if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      ?>
        <div class="wrap">
            <div class="form-wrap">
                <div class="button-wrap">
                    <div id="btn"></div>
                    <button type="button" class="togglebtn" onclick="login()">LOG IN</button>
                    <button type="button" class="togglebtn" onclick="register()">REGISTER</button>
                </div>
                <form id="login" method="post" action="login.php" class="input-group">
                    <input type="text" name="mail" class="input-field" placeholder="User Email" required>
                    <input type="password" name="pw" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="checkbox"><span>Remember Password</span>
                    <button class="submit">Login</button>
                </form>
                <form id="register" method="post" action="member_ok.php" class="input-group">

                    <input type="text" name="id" class="input-field" placeholder="Your name" required>
                    <input type="email" name="mail" class="input-field" placeholder="Your Email" required>
                    <input type="password" name="pw" class="input-field" placeholder="Enter Password" required>
                    <button class="submit">REGISTER</button>

                </form>
            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");


            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
        </script>
    </body>
</html>
