<!DOCTYPE html>
<html>
    <head>
        <title>Hello admin!</title>
        <style><?php include 'C:\xampp\htdocs\group35\css\index.css'; ?></style>
    </head>
    <body>
    <img src="P&A (1).gif" alt = "Banner" width = "100%">


    <h1>Log in as an Admin</h1>

    <div class="bg">
            <form method = "POST" action = "emphome.php">
                <label for="userName">User Name</label>
                <input type = "text" name = "userName" placeholder = "User Name" required><br>
                <label for="password">Password</label>
                <input type = "password" name = "password" placeholder = "Password" required><br>
                <input type = "submit" value = "Log in">
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
