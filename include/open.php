<!DOCTYPE html>
<html>
    <head>
        <title>Hello Newbie!</title>
        <style><?php include 'C:\xampp\htdocs\group35\css\index.css';?></style>
    </head>
    <body>
    <img src="P&A (1).gif" alt = "Banner" width = "100%">



    <h1>Register as a Customer</h1>

    <div class="bg">
            <form method = "POST" action = "home.php">
                <label for="firstName">First Name</label>
                <input type = "text" name = "firstName" placeholder = "First Name" required><br>
                <label for="lastName">Last Name</label>
                <input type = "text" name = "lastName" placeholder = "Last Name" required><br>
                <label for="email">E-mail</label>
                <input type = "text" name = "email" placeholder = "E-mail" required><br>
                <label for="password">Password</label>
                <input type = "password" name = "password" placeholder = "Password" required><br>
                <input type = "submit" value = "Register">
            </form>
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
            <form action = "index.php">
              <input type="submit" value="Back">
            </form>
          </div>
        </div>


    </body>

</html>
