<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> New Note </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="note.css" />
    <script src="main.js"></script>
</head>
<body background ="Bgimage.jpg">
<header>
        Welcome to Pen It!
</header>

    <div id ="sidebar">
        <ul>
            <li> New</li>
            <li> <a href ="2ndpage.php"> Recent </a></li>
        </ul>
    </div>

    <form method ="POST" action ="">
        <input type="text" name="title" id="title">
        <textarea rows ="20" columns ="550" name ="Entry">
        </textarea>
        <input type="button" name="Submit" id="KEEP" value="">
    </form>
</body>
</html>