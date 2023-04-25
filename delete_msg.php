<?php
include_once("db.php");
if(isset($_GET['id']))
{
    $dele_id=$_GET['id'];
    $sql_delete=mysqli_query($conn,"DELETE FROM need_med WHERE id='$dele_id'");
    if($sql_delete)
    {
       header('Loaction: ngo_profile.php'); 
    }
    else
    {
        echo mysqli_error($conn);
    }
}


?>