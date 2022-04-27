<?php


 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 if(!empty($firstName) || !empty($lastName) || !empty($email) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "crm";

    //creating connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM you WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO you (firstName, lastName, email, password) VALUES (?,?,?,?)";

        //prepare statement for SELECT query
        $stmt = $conn -> prepare($SELECT);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> bind_result($email);
        $stmt -> store_result();
        $rnum = $stmt -> num_rows;

        if ($rnum == 0) {
            $stmt -> close();

            //prepare statement for INSERT query
            $stmt = $conn -> prepare($INSERT);
            $stmt -> bind_param("ssss", $firstName, $lastName, $email, $password);
            $stmt -> execute();
            echo "Registration Successfull";
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
        <title>Customer Home</title>
        <link rel = "stylesheet" href = "css/home.css">
        <style><?php include 'C:\xampp\htdocs\group35\css\home.css'; ?></style>
    </head>
    <body>


    <img id="ban" src = "P&A (1).gif" alt="Banner" width = "100%">

    <form>
        <input type="text" name="search" placeholder="Search">
    </form>

<div id="sun" class="row">
 <div id="a" class="column">
   <img id = "ord" src="Cast-Soft Products List With Sidebar Navigation.png" alt="1" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="b" class="column">
   <img id="ord" src="CRM Dark Mode.png" alt="2" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="c" class="column">
   <img id = "ord" src="Gantt Chart - UI UX design.png" alt="3" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="d" class="column">
   <img id = "ord" src="Help Center.png" alt="4" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "order.html">Select Template</a></div>
   </div>
 </div>
</div>
<div id="sun" class="row">
 <div id="a" class="column">
   <img id = "ord" src="Workspace.png" alt="1" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="b" class="column">
   <img id="ord" src="Team Management CRM Dashboard Design.jpg" alt="2" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="c" class="column">
   <img id = "ord" src="CFlow Journal.png" alt="3" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "test.php">Select Template</a></div>
   </div>
 </div>
 <div id="d" class="column">
   <img id = "ord" src="Agent Dashboard - Real Estate Marketplace.png" alt="4" style="width:100%">
   <div class="mid">
     <div class="text"><a href = "order.html">Select Template</a></div>
   </div>
 </div>
</div>
<div id = "moon" class="row">
  <div id="help" class="column">
    <form action = "help.php">
      <input type="submit" value="Help">
    </form>
  </div>
  <div id = "moon" class="row">
    <div id="help" class="column">
      <form action = "features.php">
        <input type="submit" value="Features">
      </form>
    </div>
<div id="features" class="column">
    <form action = "open.php">
      <input type="submit" value="Log Out">
    </form>
  </div>
</div><br><br><br>
<hr style = "width: 80%; height: 4px; color: black">
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


    </body>
</html>
