<div class="col-sm-9" id="classes">
        <div id="top" ng-controller="PeopleCtrl"><?php $count=2;?>
          <div ng-repeat="person in people">
            
            <div class="col-sm-4 item" id="item">
              
               <p>{{person.class1.class_name}}</p>
              <p>{{person.class2.class_name}}</p>
              <p>{{person.class3.class_name}}</p>
              <p>{{person.class4.class_name}}</p>
              <p>{{person.class5.class_name}}</p>
             	<p>{{person.class6.class_name}}</p> 
              <button class="btn btn-outline"><a href="#/class">Enter</a></button>
            </div>
          </div>
        </div>
  
</div>
