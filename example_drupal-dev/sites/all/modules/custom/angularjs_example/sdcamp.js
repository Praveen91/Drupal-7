
var app = angular
          .module("myModule", [])
          .controller("MyController", function ($scope, $http) {
          	// Drupal folder name "drupal-dev" and path "articles" is return Format:JSON data. 
          	$http.get("/drupal-dev/articles")
          	     .then(function (response) {
          	     	$scope.teams = response.data;
          	     });
          });


 jQuery(document).ready(function(){
 	angular.bootstrap(document.getElementById('camp-app'),['myModule']);
 });         