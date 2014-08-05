var job = angular.module("JobListings", [
  'ngRoute',
  'ngResource'
]);

/*job.config(function([$routeProvider]) {
  $routeProvider
  	.when('/', {templateUrl: 'partials/listings.html', controller: 'ListingsCtrl'})
  	.when('/employer-login', {templateUrl: 'partials/employer-login.html', controller: 'EmpLoginCtrl'})
  	.otherwise({redirectTo:'/'}); 
});*/


job.config(['$routeProvider',
  function($routeProvider, $locationProvider) {

    //$locationProvider.html5mode(true); 
    $routeProvider.
      when('/', {
        templateUrl: 'partials/listings.html',
        controller: 'ListingsCtrl'
    }).
      when('/employer/login', {
        templateUrl: 'partials/employerlog.html',
        controller: 'EmpLoginCtrl'
      }).

     when('/employer/register', {
        templateUrl: 'partials/employerreg.html',
        controller: 'EmpLoginCtrl'
      }).
      
      otherwise({
        redirectTo: '/'
      });


}]);

// get all listings
job.controller("ListingsCtrl", function($scope, $http) {
	$http.get('listings').success(function(data){
      $scope.listings = data;	
  });
});

job.controller("EmpLoginCtrl", function($scope){
  
}); 

job.controller('ViewController', function() {

});