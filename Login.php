<?php 
 include('server.php');
?>
<?php
    //  validation code goes here
    $message ='';
   if (isset ($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  }
  if (empty($email) || empty($password)) {
      $message .= '<p class="error"> All fields are required</p>';
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
    <script src="form.js"></script>
</head>
<body background ="Bgimage.jpg">
<header>
        Welcome to Pen It!
</header>
    <h3> Login
    </h3>
    <?php echo $message; ?>
          <form method ="POST" action = "Login.php">
          <label for ="firstname"> Email:</label> <br>
            <input type="text" name ="email" id="email"> <br><br>
            <label for ="firstname"> Password:</label> <br>
            <input type="password" name ="password" id="password"> <br><br>
            <button type="button" name="submit"> OK </button>
          </form>

      <p> Don't have an account?  <a href ="SignUppage.php"> Sign Up </a>
      </p>             

    </body>
    </html>