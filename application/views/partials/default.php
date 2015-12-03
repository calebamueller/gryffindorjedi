<div class="col-sm-9" id="classes">
        <div id="top" ng-controller="PeopleCtrl"><?php $count = 1;?>
          <div ng-repeat="person in people track by $index">
            
            <div class="col-sm-4 item" id="item">
              
              <p>{{person.class<?php echo $count;?>}}</p>
              <p>{{person.notifications}}</p>
              <?php $count += $count;?>
              <button class="btn btn-outline"><a href="#/class">Enter</a></button>
            </div>
          </div>
        </div>
  
</div>
