<link rel="stylesheet" href="/rjl/app/webroot/css/jquery.dataTables_themeroller.css" /> 
<link rel="stylesheet" href="/rjl/app/webroot/css/jquery-ui-1.10.4.custom.min.css" /> 
<link rel="stylesheet" href="/rjl/app/webroot/css/jquery-ui-1.10.4.custom.css" /> 
<link rel="stylesheet" href="/rjl/app/webroot/css/assignments.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-resource.js"></script>
<script src="/rjl/app/webroot/js/chosen.proto.js"></script>
<script src="/rjl/app/webroot/js/chosen.jquery.js"></script>

<script src="/rjl/js/angular-datatables.min.js"></script>
<script type="text/javascript" src="/rjl/js/app.js"></script>

<div class="assignments index" ng-app="assignment">
    <h2>Facilitator Assignments</h2>
	<div class="table-responsive" ng-controller="AssignmentsController as assgn">
		<table id="assignments" datatable="ng" dt-options="assgn.dtOptions" class="row-border hover table">
			<thead>
			    <th>Facilitator</th>
			    <th>Assignments</th>
			</thead>
			<tbody id="table">
				<tr ng-repeat="assignment in assignments" >
					<td>{{assignment.User.username}}</td>
					<td>
						<a ng-repeat="case in assignment.RjCase" ng-if="case.caseStatus == 'Open - Pending' || case.caseStatus == 'Open - Monitoring'" href="/rjl/RjCases/view/{{case.id}}" target="_blank">
							<span ng-if="$first && $last">{{case.caseId}}</span>
							<span ng-if="$first && !($last)">{{case.caseId}}, </span>
							<span ng-if="!($first) && !($last)">{{case.caseId}}, </span>
							<span ng-if="$last && !($first)">{{case.caseId}}</span>
						<a>
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
</div>