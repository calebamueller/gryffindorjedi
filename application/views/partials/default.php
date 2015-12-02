<div class="col-sm-9" id="classes">
        <div id="top" ng-controller="PeopleCtrl">
          <div ng-repeat="person in people">
            
            <div class="col-sm-4 item" id="item">
              
              <h2>{{person.fname}}</h2>
              <p>{{person.lname}}</p>
              <p>{{person.class1}}</p>
              <p>{{person.notifications}}</p>
              
              <button class="btn btn-outline"><a href="#/class">Enter</a></button>
            </div>
          </div>
        </div>
  
</div>