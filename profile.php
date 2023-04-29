<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'username', 'password', 'database_name');

// check if user is logged in
if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

// fetch user details from database
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email FROM users WHERE user_id = $user_id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$email = $row['email'];

// logout user
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
     integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51"
     crossorigin="anonymous"
     />

     <!-- style.css -->
     <link rel="stylesheet" href="css/profile.css" />

</head>

<body>
    <div class="container">
        <div class="box">
            <img src="https://assets.codepen.io/285131/almeria-avatar.jpeg" alt="">
            <ul>
                <li><?php echo $username; ?></li>
                <li><?php echo $email; ?></li>
                <li>
                  <a href="profile.php?logout=true"><i style="font-size:24px" class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to your profile</h1>
        </div>
    </div>
</body>

</html>
