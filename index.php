<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movies VOD Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>


<body>

  <?php
    include '_include_top.php';
   ?>

<div class="container">

<?php
// Start the session
session_start();

print_r($_SESSION);
if(!isset($_SESSION["login_user"])){
    include '_login.php';
}else {
  include '_admin.php';
}
 ?>

</div>

</body>


</html>
