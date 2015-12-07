<div ng-controller='AnnounceCtrl'>
  <form>
  <input type="text" value='Class ID' ng-model="classes.id">
  <textarea name="announcement" value="" ng-model="classes.announcement"></textarea>
  <input type='submit' value="Announce!" ng-click="update(classes)">
  </form>
  
  <pre>classes = {{classes | json}}</pre>
  <pre>master = {{master | json}}</pre>
  
</div>