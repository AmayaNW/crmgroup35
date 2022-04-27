<?php
    include 'connection.php';

    $firstName = $result['firstName'];
    $lastName = $result['lastName'];
    $email = $result['email'];
    $password = $result['password'];

    if(!empty($firstName) || !empty($lastName) || !empty($email) || !empty($password)) {
       $host = "localhost";
       $dbUsername = "root";
       $dbPassword = "";
       $dbname = "crm";

       public function getdata($email) {
           $sql = "SELECT * FROM you WHERE email = :E-mail";
           $stmt = $this->db->prepare($sql);
           $stmt->bindparam(':E-mail', $email);
           $result = $stmt->execute();
           $result = $stmt->fetch();
           return $result;
       }

       if(isset($_GET['Email'])) {
           $email = $_GET['E-mail'];
           $result = $more->getdata();
       }else {
           echo "<h1>Please try again</h1>";
       }


<!DOCTYPE html>
<html>
    <head>
        <title>more</title>
        <link rel = "stylesheet" href = "css/more.css">
        <style><?php include 'C:\xampp\htdocs\group35\css\home.css'; ?></style>
    </head>
    <body>
        <img id="ban" src = "P&A (1).gif" alt="Banner" width = "100%">

        <div id = "moon" class="row">
          <div id="help" class="column">
            <form action = "help.php">
              <input type="submit" value="Help">
            </form>
          </div>
        <div id="features" class="column">
            <form action = "features.php">
              <input type="submit" value="Back">
            </form>
          </div>
        </div>

    </body>
</html>
