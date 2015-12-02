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
<<<<<<< HEAD

//        .when("/", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
//        .when("/home", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
//        .when("/class", {templateUrl: "application/views/partials/class.php", controller: "PageCtrl"}); 
  
        .when("/", {templateUrl: "partials/default.php", controller: "PageCtrl"})
        .when("/home", {templateUrl: "partials/default.php", controller: "PageCtrl"})
        .when("/class", {templateUrl: "partials/class.php", controller: "PageCtrl"});
=======
        .when("/", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
        .when("/home", {templateUrl: "application/views/partials/default.php", controller: "PageCtrl"})
        .when("/class", {templateUrl: "application/views/partials/class.php", controller: "PageCtrl"});
>>>>>>> origin/master
       
}]);

app.controller('PageCtrl', function($scope, $location, $http) {
  console.log("Page Controller is GO");
});

app.controller('PeopleCtrl', function ($scope, $http) {
  $scope.people = []
<<<<<<< HEAD
  $http.get('index.php/home/users')
=======
  $http.get('application/views/content.json')
>>>>>>> origin/master
    .success(function(data) {
        $scope.people = data;
        console.log(data);
    });
});
