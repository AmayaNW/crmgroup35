<?php


 $userName = $_POST['userName'];
 $password = $_POST['password'];

 if(!empty($userName) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "crm";

    //creating connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT password FROM administrators WHERE password = ? LIMIT 1";

        //prepare statement for SELECT query
        $stmt = $conn -> prepare($SELECT);
        $stmt -> bind_param("s", $password);
        $stmt -> execute();
        $stmt -> bind_result($password);
        $stmt -> store_result();
        $rnum = $stmt -> num_rows;

        if ($rnum == 0) {
            $stmt -> close();
        } else {
            echo "You logged In";
        }
        $stmt -> close();
        $conn -> close();
    }
 } else {
    echo "All fields are required";
    die();
 }




?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
        <link rel = "stylesheet" href = "css/home.css">
        <style><?php include 'C:\xampp\htdocs\group35\css\home.css'; ?></style>
    </head>
    <body>

    <img id="ban" src = "P&A (1).gif" alt="Banner" width = "100%">

    <h1 class="topic">Online CRM system of P & A Company</h1>

<div id="sun" class="row">
 <div id="a" class="column">
   <img id = "ord" src="Untitled design.png" alt="1" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "yourinfo.php">View Customers</a></div>
   </div>
 </div>
 <div id="c" class="column">
   <img id = "ord" src="Untitled design.png" alt="3" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "#">Add New Templates</a></div>
   </div>
 </div>
 <div id="d" class="column">
   <img id = "ord" src="Untitled design.png" alt="4" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "#">Contact Customers</a></div>
   </div>
 </div>
 <div id="d" class="column">
   <img id = "ord" src="Untitled design.png" alt="4" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "#">See History</a></div>
   </div>
 </div>
</div>
<div id = "moon" class="row">
  <div id="help" class="column">
    <form action = "help.php">
      <input type="submit" value="Help">
    </form>
  </div>
<div id="features" class="column">
    <form action = "features.php">
      <input type="submit" value="Features">
    </form>
  </div>
  <div id="features" class="column">
      <form action = "emplog.php">
        <input type="submit" value="Log Out">
      </form>
    </div>
</div>
<div class = "foot">
 <p>
   <span class="br"></span>
    P & A Company
 <span class="br"></span>
     Get best CRM solution for your business.
 <span class="br"></span>
     p&acrmsolutions@yahoo.com
 </p>

</div>

<hr style = "width: 80%; height: 4px; color: black">

    </body>
</html>
