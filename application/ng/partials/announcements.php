<div ng-controller='AnnounceCtrl'>
  <form>
  <input type="text" value='Class ID' placeholder='Enter Class ID' ng-model="classes.id">
  <textarea name="announcement" value="" ng-model="classes.announcement"></textarea>
  <input type='submit' value="Announce!" ng-click="update(classes); go('/announcement')">
  </form>
  
  
</div>