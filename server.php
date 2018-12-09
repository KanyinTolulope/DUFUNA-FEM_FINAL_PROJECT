<?php
  session_start ();

    $firstname = "";
    $lastname = "";
    $errors = array();
// connect to the database
  $db = mysqli_connect ('localhost', 'root','mysql', 'Pen_It');

// if the register button is clicked 
  if (isset($_POST ['SignUp'])) {
   $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
   $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  }
// ensure that form fields are filled properly
  if (empty($firstname)) {
    array_push($errors, "Firstname is required"); 
  }
  if (empty($lastname)) {
    array_push($errors, "Lastname is required");
  }
  if (empty($email)) {
    array_push($errors, "Email Address is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if ($password != $password2) {
    array_push($errors, "The two passwords are not the same");
  }

// if there are no errors, save user to database
  if (count($errors) == 0) {
    $password = md5 ($password2); // encrypt password before storing in database (security)
    $sql = "INSERT INTO Users (firstname, lastname, email, 'password')
                     VALUES ('$firstname', '$lastname', '$email', '$password')";
  mysqli_query($db, $sql);
    $_SESSION ['firstname'] = $firstname;
    $_SESSION ['success'] = "You are now logged in";
    header ('location:index_1.php'); // redirect to home page
  }
 

// log user in from login page
  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
 
 // ensure that form fields are filled properly
  if (empty($email)) {
     array_push($errors, "Email Address is required");
  }
  if (empty($password)) {
     array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
     $password= md5($password); // encrypt password before comparing with that from database
     $query = "SELECT * FROM User WHERE email='$email' AND 'password'='$password'";
     $results = mysqli_query($db, $query);
     if (mysqli_num_rows($results) == 1) {
        // log user in
        $_SESSION ['firstname'] = $firstname;
        $_SESSION ['success'] = "You are now logged in";
        header ('location:index_1.php'); // redirect to home page
     } else {
         array_push($errors, "Invalid email/password combination");
     }
 }
  }

// logout
  if (isset($_GET['logout'])) {
      session_destroy ();
      unset($_SESSION['firstname']);
      header('location:Login.php');
  }
?>