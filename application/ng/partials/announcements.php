<div ng-controller='AnnounceCtrl'>
  <form>
  <textarea name="announcement" value="" ng-model="class.announcement"></textarea>
  <input type='submit' value="Announce!" ng-click="getID(); update()">
  </form>
</div>