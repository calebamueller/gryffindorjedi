<!DOCTYPE html>
<html>
<div id="content">
<div class="reg_form">
<div class="form_title">Add Resource</div>
 <?php echo form_open("Grades_controller/newAssignment"); ?>
  <p>
  <label for="assignment_name">Assignment Name:</label>
  <input type="text" id="ass_name" name="ass_name" value="<?php echo set_value('name'); ?>" />
  </p>
  <p>
  <label for="desc">Description:</label>
  <input type="text" id="description" name="description" value="<?php echo set_value('desc'); ?>" />
  </p>
  <p>
  <label for="pointsPoss">Points Possible:</label>
  <input type="text" id="pp" name="pp" value="<?php echo set_value('pp'); ?>" />
  </p>
  <p>
  <input type="submit" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->
</html>
