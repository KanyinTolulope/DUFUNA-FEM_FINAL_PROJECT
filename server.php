<?php
  session_start ();

// connect to the database
  $server = "localhost";
  $user = "root";
  $password = "";
  $db = "penit";
  $db = mysqli_connect($server, $user, $password, $db);


// if the register button is clicked 
  if (isset($_POST['submit'])) {
    session_start();
   $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
   $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    if ($password == $password2) {
      // create user
        $password = md5 ($password); // encrypt password before storing for security purposes
        $sql = "INSERT INTO users (firstname, lastname, email, pass_word)
                     VALUES ('$firstname', '$lastname', '$email', '$password')";
      mysqli_query($db, $sql);
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['firstname'] = $firstname;
      header("location:index_1.php"); //redirect to new page
    }else{
      $_SESSION['message'] = "The two passwords do not match";
    }
  }  

// log user in from login page
  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
     $query = "SELECT * FROM users WHERE email='$email' AND pass_word='$password'";
     $results = mysqli_query($db, $query);
     if (mysqli_num_rows($results) == 1) {
        // log user in
        $_SESSION ['firstname'] = $firstname;
        $_SESSION ['success'] = "You are now logged in";
        header ("location:index_1.php"); // redirect to new page
     } else {
      $_SESSION['message'] = "Invalid email/password combination";
     }
 }


// logout
  if (isset($_GET['logout'])) {
      session_destroy ();
      unset($_SESSION['firstname']);
      header('location:Login.php');
  }
?>