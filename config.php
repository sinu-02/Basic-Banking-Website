<?php      

     //Local Development Connection requirement
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "CSB_bank";

     
$conn = mysqli_connect ($servername, $username , $password , $database);

if (!$conn) {
    die ("Failed to Connect to the Database due to --> ".mysqli_connect_error());
}

?>
