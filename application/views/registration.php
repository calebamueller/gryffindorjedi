<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel=stylesheet href="application/views/assets/css/homeStyle.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="application/views/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Exo+2:400,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>

  <body>
    <div id="content">
    <div class="reg_form">
    <div class="form_title">Sign Up</div>
     <?php echo form_open('LoginController/register'); ?>
      <p>
      <label for="user_name">User Name:</label>
      <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
      </p>
      <p>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
      </p>
      <p>
      <label for="con_password">Confirm Password:</label>
      <input type="password" id="confirm_pass" name="confirm_pass" value="<?php echo set_value('confirm_pass'); ?>" />
      </p>
      <p>
      <input type="submit" value="Submit" />
      </p>
     <?php echo form_close(); ?>
    </div><!--<div class="reg_form">-->
    </div><!--<div id="content">-->
  </body>
</html>
