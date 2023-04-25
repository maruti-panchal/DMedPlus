<?php
include_once('db.php');
if(isset($_GET['id']))
{
  $main_id=$_GET['id'];
  $sql_get=mysqli_query($conn,"UPDATE need_med SET status=1 WHERE id='$main_id'");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://kit.fontawesome.com/41b051ed13.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" type="text/css" href="myprofile.css" />
  </head>
  <header>
    <div class="nav" style="height: 80px">
      <h2>Med+</h2>
      <ul id="item">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./aboutus.html">About Us</a></li>
        <li><a href="getting_data.php">NGO's</a></li>
        <li>
          <a href="#">My Profile</a>
          <ul>
            <li><a href="#">History</a></li>
            <li><a href="med_donation_form.php">Donations</a></li>
            <li><a href="need_med.php">Need Medicine</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <body>
    <link rel="stylesheet" href="read_msg.css" />
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="container">
      <div class="alert alert-success" role="alert" style="margin-top: 8rem">
       
        <div class="detail">
          <?php
            
            $sql_get=mysqli_query($conn,"SELECT * FROM need_med WHERE status=1");
            while($main_result=mysqli_fetch_assoc($sql_get)) :?>
          <div>
            <h4>fist Name:-<?php echo $main_result['fname']; ?></h4>
          </div>
          <div>
            <h4>Last Name:-<?php echo $main_result['lname']; ?></h4>
          </div>
          <div>
            <h4>Mobile No:-<?php echo $main_result['mobile']; ?></h4>
          </div>
          <div>
            <h4>Email:-<?php echo $main_result['email']; ?></h4>
          </div>
          <div>
            <h4>State:-<?php echo $main_result['state']; ?></h4>
          </div>
          <div>
            <h4>city:-<?php echo $main_result['city']; ?></h4>
          </div>
          <div>
            <h4>Address:-<?php echo $main_result['address']; ?></h4>
          </div>
          <div>
            <h4>Medicine Name:-<?php echo $main_result['med_name']; ?></h4>
          </div>
          <div>
            <h4>Company:-<?php echo $main_result['company']; ?></h4>
          </div>
          <div>
            <h4>Unit:-<?php echo $main_result['unit']; ?></h4>
          </div>
          <div>
            <h4>File:-<?php echo $main_result['file']; ?></h4>
          </div>
          <a href="delete_msg.php?id=<?php echo $main_result['id']; ?>" style="
    margin-left: 20rem; margin-bottom: 2rem" type="button" class="btn btn-danger">Delete</a>
          <?php endwhile ?>
          
        </div>
      </div>
    </div>
  </body>
</html>
