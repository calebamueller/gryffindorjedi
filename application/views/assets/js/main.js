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


        .when("/", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
        .when("/home", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
        .when("/class", {templateUrl: "application/views/partials/class.php", controller: "PageCtrl"});
       
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
  
  var $id = IdService.getId();
  console.log($id);
  $http.get('index.php/home/getclass/'+$id)
          .success(function(data){
          $scope.classes = data;
          console.log(data);
        });
});


    
                    
  
  
