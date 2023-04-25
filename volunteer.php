<?php
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
 

  if( $username!='' &&  $email!='' && $mobile!='' &&  $password!='')
  {
    $sql="INSERT INTO volunteer(username,email,mobile,password)VALUES('$username','$email',' $mobile',' $password')";
    include_once('db.php');

    $qry=mysqli_query($conn,$sql) or die("Data insert Error");

    if($qry)
    {
      echo '<div class="alert alert-success" role="alert">
     Successfully  Registered
    </div>';
      
    }
  }
  else
    {
      echo 'alert(<div class="alert alert-success" role="alert">
      Please fill all Fields!
    </div>)';
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
              <i class="bi bi-person-circle ac-logo"></i>Sign Up
            </h3>

            <form action="" method="post">
              <div class="item">
                <input class="input" name="username" type="text" placeholder="Username" />
              </div>
              <div class="item">
                <input class="input" name="email" type="email" placeholder="Email" />
              </div>
              <div class="item">
                <input class="input" name="mobile" type="number" placeholder="Mobile No" />
              </div>
              <div class="item">
                <input class="input" name="password" type="password" placeholder="Password" />
              </div>

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
              >Already have an Account?
              <a href="volunteer_log.php">Log In</a></span
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
