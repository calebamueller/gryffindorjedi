<div class="col-sm-9" id="classes">
        <div id="top" ng-controller="PeopleCtrl"><?php $count=2;?>
          <div ng-repeat="person in people">
            
            <div class="col-sm-4 item" id="item">
              
              <p>{{person.class1.class_name}}</p>
              <p>{{person.class1.instructor}}</p>            
              <p>{{person.class2.class_name}}</p>
              <p>{{person.class2.instructor}}</p>
              <p>{{person.class3.class_name}}</p>
              <p>{{person.class3.instructor}}</p>
              <p>{{person.class4.instructor}}</p>
              <p>{{person.class5.class_name}}</p>
              <p>{{person.class5.instructor}}</p>
              <p>{{person.class6.class_name}}</p> 
              <p>{{person.class6.instructor}}</p>
              
              <button ng-controller="ClassCtrl" class='btn-default' id='{{person.class1.class_name}}{{person.class2.class_name}}{{person.class3.class_name}}{{person.class4.class_name}}' ng-click="showAlert($event); go('/class')">Enter Class</button>
              
            </div>
          </div>
        </div>
  
</div>
