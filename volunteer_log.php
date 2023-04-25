<?php
 include_once('db.php');
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM volunteer WHERE username='$username' && password='$password'";
  //include_once('db.php');

  $qry=mysqli_query($conn,$sql) or die("Login Problem");
  $count=mysqli_num_rows($qry);
  if($count==1)
  {
  
    header("Location: vmyprofile.php");
  }
  else
  {
    echo "Please enetr correct Email/Password";
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>Login</title>
        <script
          src="https://kit.fontawesome.com/41b051ed13.js"
          crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" type="text/css" href="volunteer.css" />
        <link
          rel="shortcut icon"
          href="https://cdn-icons-png.flaticon.com/512/295/295128.png"
          type="image/x-icon"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
        />
      </head>
      <header>
        <script src="./header.js"></script>
      </header>
      <body>
        <div class="container">
          <div class="container-wrapper">
            <h3 class="login-text">
              <i class="bi bi-person-circle ac-logo"></i>Login
            </h3>

            <form action="" method="POST">
              <div class="item">
                <input
                  class="input"
                  name="username"
                  type="text"
                  placeholder="Username"
                />
              </div>
              <div class="item">
                <input
                  class="input"
                  name="password"
                  type="password"
                  placeholder="Password"
                />
              </div>
              <span class="remember"> <a href="#">Forgot Password?</a> </span>

              <div class="item submit">
                <button type="submit" name="submit">Submit</button>
              </div>
            </form>
            <h2><span>OR</span></h2>

            <div class="social-media">
              <a href="#"><div class="icons8-google social-mediaImg"></div></a>
              <a href="#"
                ><div class="icons8-facebook-circled social-mediaImg"></div
              ></a>
              <a href="#"><div class="icons8-twitter social-mediaImg"></div></a>
            </div>
            <span class="ac"
              >Don't have an Account? <a href="volunteer.php">Sign Up</a></span
            >
          </div>
        </div>
      </body>
    </html>
    <footer>
      <script src="footer.js"></script>
    </footer>
  </body>
</html>
