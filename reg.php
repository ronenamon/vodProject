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



  <div class="row">
    <div class="col-lg-4">
    </div>

    <div class="col-lg-4 adminTitle">
      <h3>Admin Dashboard</h3>

    </div>

    <div class="col-lg-4">
    </div>
  </div>


  <div class="row">


      <div class="col-lg-4">
      </div>

        <div class="col-lg-4">
          <fieldset>
            <div class="control-group">
              <!-- Username -->
              <label class="control-label"  for="username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder=""  class="form-control">

              </div>
            </div>

            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="form-control">

              </div>
            </div>

            <div class="control-group">
              <!-- Password-->
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="form-control">
              </div>
            </div>



            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <br>
                <button type="submit" class="btn btn-success" id="regBtn">Register</button>
              </div>
            </div>

          </fieldset>
          <div id="success">
          </div>
          <!-- </form> -->
      </div>


      <div class="col-lg-4">
      </div>


  </div>

</div>
</body>
</html>
