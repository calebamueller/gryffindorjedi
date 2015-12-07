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

app.controller('PageCtrl', function($scope, $location, $http) {
  console.log("Page Controller is GO");
});

app.controller('PeopleCtrl', function ($scope, $http) {
  $scope.people = []
  $http.get('index.php/home/users')
    .success(function(data) {
        $scope.people = data;
        console.log(data);
    });
  
  $scope.createUrl = function(event){
      console.log(event.target.id);
      $scope.id = event.target.id;
    
  $http.get('index.php/home/getclass/'+$scope.id)
          .success(function(data){
          $scope.classes = data;
          console.log(data);
        });
  }
});

app.controller('ClassCtrl', function ($scope, $http, $location) {
  
  $scope.go = function (path) {
    $location.path(path);
  };
  
});
  
  
