<!DOCTYPE html>
<html>
<div id="content">
<div class="reg_form">
<div class="form_title">Sign Up</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("LoginController/register"); ?>
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
</html>
