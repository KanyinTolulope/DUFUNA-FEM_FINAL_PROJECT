<?php
  session_start();
<?php
 include('server.php');
?>
    //  if user is not logged in, they cannot access this page
    if (empty($_SESSION['email'])) {
       header ('location: Login.php');
    }
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HO-P</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class ="header">
        <h2> Get Started </h2>
    </div>

  <div class = "content">
      <?php if (isset($_SESSION['success'])): ?>
      <div class ="error success">
          <h3>
              <?php
                 echo $_SESSION['success'];
                 unset($_SESSION['success']);
              ?>
          </h3>
      </div>
      <?php endif ?>

      <?php if (isset($_SESSION["firstname"])): ?>
     <p>Welcome<strong><?php echo $_SESSION ['firstname']; ?></strong></p>
     <p><a href="index_1.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>
</div>


</body>
</html>