<div ng-controller='AnnounceCtrl'>
  <?php $id = ?><script>getId();</script><?php;?>
  <form action="index.php/Home/announcements/<?php $id;?>" method="POST">
  <textarea name="announcement" value="" ></textarea>
  <input type='submit' value="Announce!">
  </form>
</div>