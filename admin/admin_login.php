<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Register & Login</title>

  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- External css -->
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    .navbar{
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #333;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    padding: 10px 0;
    z-index: 1000;
 }
  .logo{
    position: relative;
    left: 30px;
    border-radius: 5px;
  }
  .navbar .navbar-brand{
   position: relative;
   left: 45px;
   bottom: 5px;
   font-size: 30px;
   font-weight: 500;
   Arial, sans-serif;
   color: #0020C2;
  }
  .navbar .navbar-nav{
    list-style: none;
    padding: 0;
    margin: 0;
    float: right;
  }
  .navbar .navbar-nav .nav-item{
    display: inline;
    position: relative;
    left: 150px;
    margin-left: 110px;
  }
  .navbar .navbar-nav .nav-item .nav-link{
    color: #0020C2;
    text-decoration: none;
    font-size: 18px;
  }
  .navbar .navbar-nav .nav-item .nav-link:hover {
    color: #f0a500;
  }
  .navbar .navbar-nav .nav-item .nav-link i{
    font-size: 15px;
  }
  .custom-card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: none;
  }
  .custom-card img {
    height: auto;
    width: 100%;
    border-radius: 10px;
  }

  /* Media Query for Mobile Devices */
  @media (max-width: 780px) {
  .logo {
    width: 40px;
    height: 40px;
    position: relative;
    left: 15px;
    border-radius: 5px;
  }
  .navbar .navbar-brand{
   position: relative;
   left: -10px;
   bottom: 5px;
   font-size: 30px;
   font-weight: 500;
   Arial, sans-serif;
   color: #0020C2;
  }
  .navbar .navbar-nav{
    list-style: none;
    padding: 0;
    margin: 0;
    float: left;
  }
  .navbar .navbar-nav .nav-item{
    display: inline;
    position: relative;
    left: 0px;
    margin-left: 10px;
  }
  .navbar .navbar-nav .nav-item .nav-link{
    color: #0020C2;
    text-decoration: none;
    font-size: 18px;
  }
  .navbar .navbar-nav .nav-item .nav-link:hover {
    color: #f0a500;
  }
  .navbar .navbar-nav .nav-item .nav-link i{
    font-size: 15px;
  }
  .custom-card-title {
    font-size: 1.25rem;
  }
  }
  </style>
</head>

<body>
  <!-- Nabvar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../images/mimit.jpeg" class="logo" width="50" height="50">
    <a class="navbar-brand" href="../Home/index.php">AttendMaster</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../started/index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/admin_login.php"><i class="fas fa-user-tie"></i> Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user-graduate"></i> Student</a>
      </li>
    </ul>
  </div>
 </nav>

 <!-- Admin form -->
 <div class="container" id="signIn">
  <h1 class="form-title">Admin Login</h1>
  <?php
  if (isset($errors['login'])) {
    echo '<div class="error-main">
                  <p>' . $errors['login'] . '</p>
                  </div>';
    unset($errors['login']);
  }
  ?>
  <form method="POST" action="user-account.php">
    <div class="input-group">
      <i class="fas fa-envelope"></i>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <?php
      if (isset($errors['email'])) {
        echo ' <div class="error">
                  <p>' . $errors['email'] . '</p>
              </div>';
      }
      ?>
    </div>
    <div class="input-group password">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <i id="eye" class="fa fa-eye"></i>
      <?php
      if (isset($errors['password'])) {
        echo ' <div class="error">
                  <p>' . $errors['password'] . '</p>
              </div>';
      }
      ?>
    </div>
    <p class="recover">
      <a href="#">Recover Password</a>
    </p>
    <input type="submit" class="btn" value="Sign In" name="signin">
  </form>
  <div class="links">
    <p>Don't have account yet?</p>
    <a href="admin_register.php">Sign Up</a>
  </div>
</div>

 </div>
  
  <script src="script.js"></script>

 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>