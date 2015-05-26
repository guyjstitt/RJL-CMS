(function() {
	app = angular.module('assignment',['datatables','ngResource']);
	app.controller('AssignmentsController', ['$scope', '$resource','DTOptionsBuilder', function($scope, $resource, DTOptionsBuilder) {
		$scope.assignments = [];
	    this.dtOptions = DTOptionsBuilder.newOptions().withOption('bJQueryUI', true).withOption('pagingType', 'simple');
	    $resource('/rjl/api/assignments/').query().$promise.then(function(result) {
	        $scope.assignments = result[0].assignments;
	        $scope.allCases = result[0].allCases;
	    });
	}]);
})();
