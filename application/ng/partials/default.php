<div class="col-sm-12" id="classes">
        <div id="top" ng-controller="PeopleCtrl">
          <div ng-repeat="person in people">
            
            <div class="col-sm-3 item" id="item">
              
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
              
              <button class='btn btn-default' id='{{person.class1.class_id}}{{person.class2.class_id}}{{person.class3.class_id}}{{person.class4.class_id}}' ng-click="createUrl($event); go('/class')">Enter Class</button>
              
            </div>
          </div>
        </div>
  
</div>
