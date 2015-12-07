<div ng-controller='AnnounceCtrl'>
  <form>
  <textarea name="announcement" value="" ng-model="classes.announcement"></textarea>
  <input type='submit' value="Announce!" ng-click="getID(); update(classes)">
  </form>
</div>