<?php
    //  validation code goes here
    $message ='';
   if (isset ($_POST['submit'])) {
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password2 = $_POST['password2'];
    }
       if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($password2)) {
           $message .= '<p class="error"> All fields are required</p>';
       }
       if ($password != $password2) {
            $message .= '<p> class="error" Invalid passwords</p>';
       }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
    <script src="main.js"></script>
</head>
<body background ="Bgimage.jpg"> 
    <header>
        Welcome to Pen It!
    </header>
    <h3> Sign Up
    </h3>
    <?php echo $message; ?> 
      <form method ="POST" action ="SignUppage.php">
          
          Firstname: <br>
          <input type="text" name="firstname" value = "<?php echo $firstname; ?>"> <br><br>
          Lastname: <br>
          <input type="text" name="lastname" value = "<?php echo $lastname; ?>"> <br><br>
          Email: <br>
          <input type="text" name="email" value = "<?php echo $email; ?>"> <br><br>
          Password: <br>
          <input type="password" name="password" > <br><br>
          Confirm password: <br>
          <input type="password" name="password2" > <br><br>
          <button type="button" name="Submit"> OK </button>
    <p> Have an account?  <a href ="Login.php"> Login </a> </p>
</body>
</html>