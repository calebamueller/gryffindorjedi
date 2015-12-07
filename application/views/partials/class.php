<div class="col-sm-12" id="class" ng-controller="ClassCtrl">
  <div class="col-sm-6" id="left">
    <h2>Due</h2>
    <div class="col-sm-12" id="due">
      <div ng-repeat="c in classes">
        <h3>{{c.assignments.ass_name}<br></h3>
      </div>
      <span><h3>Homework 1: </h3><p>{{c.assignments.ass_name}}</p><br></span>
      <h3>Homework 2: </h3><p>September 2<br></p>
    </div>
  </div>
  <div class="col-sm-6" id="center">
    <h2>Announcements</h2>
    <div class="col-sm-12" id="messages">
      <p>admin/</p><h3>Welcome to Slate</h3><br>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6" id="right">
      <h2>Grades</h2>
      <div class="col-sm-12" id="grades">
        <h3>Tests Average:</h3><p> 100%</p><br>
        <h3>Homework Average: </h3><p> 90%</p><br>
      </div>
    </div>
    <div class="col-sm-6" id="links">
      <h2>Course Content</h2>
      <div class="col-sm-12" id="ccontent">
        <h3>Syllabus</h3><br>
        <h3>Important Link1</h3><br>
        <h3>Important Link2</h3><br>
      </div>
    </div>
</div>
</div>