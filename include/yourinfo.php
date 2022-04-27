<?php
    include('connection.php');

    $query = "SELECT * FROM you";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <link rel = "stylesheet" href = "css/home.css">
    <style><?php include 'C:\xampp\htdocs\group35\css\yourinfo.css'; ?></style>
</head>
<body>
    <img id="ban" src = "P&A (1).gif" alt="Banner" width = "100%">
    <table align = "center" border = "0px" style = "width: 500px; line-height: 30px">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
            while($you = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $you['id']; ?></td>
                    <td><?php echo $you['firstName']; ?></td>
                    <td><?php echo $you['lastName']; ?></td>
                    <td><?php echo $you['email']; ?></td>
                    <td><?php echo $you['password']; ?></td>
                    <td>
                        <a href = "more.php?email=<?php echo $email['E-mail']?>">View</a>
                        <a href = "edit.php?email=<?php echo $email['E-mail']?>">Edit</a>
                        <a onclick="return confirm('Confirm deletion');" href="delete.php?email=<?php echo $email['E-mail']?>">Delete</a>
                </tr>

        <?php
            }
        ?>


    </table>

    <div id = "back" class="row">
        <form action = "emphome.php">
          <input type="submit" value="Back">
        </form>
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
