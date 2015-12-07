<!DOCTYPE html>
<html>
<head>
	 
	<style>
		#header{
		  	  font-size: 35px;
			  width: 100%;
			  margin: auto;
			  position: center;
			  background: #fff;
			  height: 50px;
			  border: 10px;
			  color: black;
		}
		
		#{
		
		}
	</style>
</head>
<div id="content">
<div class="reg_form">
<div class="form_title" id="header">Add Resource</div>
 <?php echo form_open("Grades_controller/newAssignment"); ?>
  <p>
  <label for="assignment_name">Assignment Name:</label>
  <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" />
  </p>
  <p>
  <label for="desc">Description:</label>
  <input type="text" id="desc" name="desc" value="<?php echo set_value('desc'); ?>" />
  </p>
  <p>
  <label for="pointsPoss">Points Possible:</label>
  <input type="text" id="pp" name="pp" value="<?php echo set_value('pp'); ?>" />
  </p>
  
  <p>
  <input type="submit" value="Submit" />
  </p>
 <?php echo form_close(); ?>
 
 <?php echo form_open("php upload.php " + ""); ?>
 <p>
  <label for="fileInput">File Upload</label>
  <input type="file" id="doc" name="doc" value="" />
  </p>
  <p>
  <input type="submit" value="Submit" />
  </p>
  <?php echo form_close(); ?>
  
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->
</html>
