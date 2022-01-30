<?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registeri.css";>
    <link rel="stylesheet" href="../style/footer.css";>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    
</head>
<body>

    <form class="forma" method="post" action="">

    <?php 
  if(isset($_POST['submit'])){
        $user_name = $_POST['user_name'];
        $user_lastname = $_POST['user_lastName'];
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_confPassword = $_POST['user_confPassword'];
      
      
      $query = "INSERT INTO users(user_name, user_lastName, user_username, user_email, user_password, user_confPassword, user_role) ";
      $query .=" VALUES('{$user_name}' , '{$user_lastname}' , '{$user_username}' , '{$user_email}','{$user_password}','{$user_confPassword}' , 'Subscriber')";
      $query_users = mysqli_query($conn,$query);

     if(!$query_users){
       die('Query failed' . mysqli_error($conn));
     }else{
       echo "Createdd Succesfuly!";
     }
  }
    ?>
        
        <div class="div-forma">
        <h2>Register</h2>
            <label for="name">Name:
            <input type="text" class="form-control" id="name" name='user_name'>
            </label>
        
            <label for="lastname">LastName:
            <input type="text" class="form-control" name='user_lastName' id="lastname">
            </label>
            
            <label for="user_username">Username:
            <input type="text" class="form-control" name='user_username' id="username">
            </label>
        
            <label for="email">Email:
            <input type="email" class="form-control" name="user_email" id="email">
            </label>
        
            <label for="Password">Password:
            <input type="password" class="form-control" name='user_password' id="password">
            </label>
        
            <label for="user_confPassword">Confirm Password:
            <input type="password" class="last-input" name='user_confPassword' id="password">
            </label>
            <button type="submit" name="submit" class="btn-register">Create</button>

        </div>
    </form>
    </body>       
<?php include "../footer.php"; ?>