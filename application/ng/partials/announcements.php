<?php echo form_open('Home/announcments');?>

<textarea name="announcement" value="<?php set_value('announcement');?>" ></textarea>
<input type='submit' value="Announce!">
<?php echo form_close();?>