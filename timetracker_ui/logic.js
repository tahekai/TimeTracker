var myApp = angular.module('myApp', []);
var interval;
      
myApp.controller('ParticipantsController', ['$http', '$scope', '$interval','$window',function($http,$scope,$interval,$window) {
    $http.get('http://localhost:8000/api/v1/alldata').success(function(data) {
        var participants = [];
        for(var participant in data) {
          participants.push(data[participant]);
        }
        
        $scope.participants = participants;
        
        $window.open(interval  =  $interval(function () {
            $http.get('http://localhost:8000/api/v1/alldata').success(function(data) {
                var participants = [];
                for(var participant in data) {
                    participants.push(data[participant]);
                $scope.participants = participants;
                }
            });
        console.log('interval');
        }, 5000)
        );
        
        $window.onfocus = function() {
            console.log('>onfocus');
            interval  =  $interval(function () {
                $http.get('http://localhost:8000/api/v1/alldata').success(function(data) {
                    var participants = [];
                    for(var participant in data) {
                        participants.push(data[participant]);
                    $scope.participants = participants;
                    }
                });
            console.log('interval');
            }, 5000)
        };
        
        $window.onblur = function() {  
            console.log('>onblur');
            $interval.cancel(interval);
        }; 
    });
}]);