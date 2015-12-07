<form action='index.php/Grades_controller/newAssignment' method='post'>
<div class="reg_form">
<div class="form_title">Add Resource</div>
 <?php //echo form_open("Grades_controller/newAssignment"); ?>
  <p>
  <label for="assignment_name">Assignment Name:</label>
  <input type="text" id="name" name="name" value="<?php //echo set_value('name'); ?>" ng-model="ass.name" />
  </p>
  <p>
  <label for="desc">Description:</label>
  <input type="text" id="desc" name="desc" value="<?php //echo set_value('desc'); ?>" ng-model="ass.desc"/>
  </p>
  <p>
  <label for="pointsPoss">Points Possible:</label>
  <input type="text" id="pp" name="pp" value="<?php //echo set_value('pp'); ?>" ng-model="ass.pp"/>
  </p>
  
  <p>
  <input type="submit" value="Submit" ng-controller='PeopleCtrl' ng-click="go('/home')"/>
  </p>
 <?php //echo form_close(); ?>
 
 <?php //echo form_open("php upload.php " + ""); ?>
 <p>
  <label for="fileInput">File Upload</label>
  <input type="file" id="doc" name="doc" value="" />
  </p>
  <p>
  <input type="submit" value="Submit" />
  </p>
  <?php //echo form_close(); ?>
  
  <pre>ass.name | json</pre>
  
</div><!--<div class="reg_form">-->
</form>