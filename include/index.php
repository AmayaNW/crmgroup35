<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <style><?php include 'C:\xampp\htdocs\group35\css\index.css'; ?></style>
    </head>
    <body>
    <img src="P&A (1).gif" alt = "Banner" width = "100%">

    <div class="opt">
    <form method = "POST" action = "open.php">
        <div class="sel">
            <input type = "submit" value="Register as a Customer">
    </form>
        </div>
        <div class="sel">
        <form method = "POST" action = "culog.php">
            <input type="submit" value="Log in as a Customer">
        </form>
        </div>
        <div class="sel">
        <form method = "POST" action = "emplog.php">
            <input type="submit" value = "Log in as an Admin">
        </form>
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

    </body>
