<!DOCTYPE html>
<html>
<head>
	 
	<style>
		#content{
			width: 500px;
		}
		
		#header{
		  	  font-size: 35px;
			  width: 100%;
			  margin: 0 auto;
			  position: center;
			  height: 50px;
			  border: 10px;
			  color: #FFF;
			  background #282828;
		}
		
		#name{
			 font-size: 20px;
			  width: 50%;
			  margin: 0 auto;
			  height: 25px;
			  border: 5px;
			  color: #FFF;
			  background #282828;
		}
		
		
	</style>
</head>
<div id="content">
<div class="reg_form">
<div class="form_title" class="bg" id="header">Add Resource</div>
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

 <?php echo form_open_multipart('');? >
 <p>
  <label for="fileInput">File Upload</label>
  <input type="file" id="doc" name="doc" value="<?php echo set_value('doc'); ?>" />
  </p>
  <p>
  <input type="submit" value="Submit" />
  </p>
  <?php echo form_close(); ?>

</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->
</html>
