//var app = angular.module("app", []);
//
//    app.config(function($routeProvider){
//      $routeProvider.when("/",
//        {
//          templateUrl: "landing.html",
//          controller: "homeCtrl",
//          controllerAs: "app"
//        }
//      );
//    });

/* Main AngularJS Web App */

var app = angular.module('webApp', ['ngRoute']);

/* Configure the Routes */

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
// Home


        .when("/", {templateUrl: "application/ng/partials/default.php", controller: "PageCtrl"})
        .when("/home", {templateUrl: "application/ng/partials/default.php", controller: "PageCtrl"})
        .when("/class", {templateUrl: "application/ng/partials/class.php", controller: "PageCtrl"})
        .when("/announcement", {templateUrl: "application/ng/partials/announcements.php", controller: "PageCtrl"}),
        .when("/chat", {templateUrl: "application/ng/partials/chat.php"});
       
}]);

app.service('IdService', [function() {
  var $classId = 0;
  this.setId = function($id){
    $classId = $id;
    console.log($classId);
  }
  this.getId = function() {
    console.log($classId);
    return $classId;
  }
  var $dicks = 'Dicks'
  return $dicks;
}]);

app.controller('PageCtrl', function($scope, $location, $http) {
  console.log("Page Controller is GO");
});

app.controller('PeopleCtrl', function ($scope, $http, $location, IdService) {
  $scope.people = []
  $http.get('index.php/home/users')
    .success(function(data) {
        $scope.people = data;
        console.log(data);
    });
  
  $scope.createUrl = function(event){
      console.log(event.target.id);
      $scope.id = event.target.id;
      IdService.setId($scope.id);
  }
  
   $scope.go = function (path) {
    $location.path(path);
  };
  
});

app.controller('ClassCtrl', function ($scope, $http, $location, IdService) {
  $scope.classes = []
  var $id = IdService.getId();
  console.log($id);
  console.log('I have the stuff');
  $http.get('index.php/home/getclass/'+$id)
          .success(function(data){
          $scope.classes = data;
          console.log(data);
        });
});

app.controller('AnnounceCtrl', function ($scope, $http, $location, IdService) {
  $scope.master = {};
  
  $scope.update = function(classes) {
    $scope.master = angular.copy(classes);
//    $http.post('index.php/Home/announcements/')
//    .success(function(response){
//      console.log(response);
//    });
    var FormData = {
      'id' : $scope.master.id,
      'announcement' : $scope.master.announcement
    };
    $http({
      method: 'POST',
      url: 'index.php/Home/announcements',
      data: FormData,
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    })
      .success(function(response) {
        console.log(response);
      });
  };
  
//  $scope.getId = function() {
//    var $id = IdService.getId();
//    console.log('Announce'+$id);
//  };
  
//  $http.post('index.php/Home/announcements/'+$id)
//    .success(function(data){
//    console.log(data);
//  });
    $scope.go = function (path) {
    $location.path(path);
  };
  
});

//app.controller('announceCtrl', function ($scope, $http, $location, IdService) {
//  $scope.announce = function () {
//  $scope.annoucement = '';
//  var $id = IdService.getId();
//  $http.post('index.php/home/makeAnnouncement/'+$id+$scope.announcement)
//    .success(function(data){
//      alert("success");
//  });
//  };
//};


    
                    
  
  
