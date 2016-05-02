<html>
<head>

	<script src=<?php echo base_url()?>assets/js/angular.js></script>
	<script src=<?php echo base_url()?>assets/js/jquery-1.12.0.js></script>
	<script src=<?php echo base_url()?>assets/custom/script.js></script>
	<script src=<?php echo base_url()?>assets/bootstrap/js/bootstrap.js></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">

</head>
<body ng-app="myModule" ng-controller="myController">

 Row To Display: <input type="number" step="1" min="0" max="8" ng-model='rowlimit'>
 Search: <input type="text" ng-model="search" >
Hide Date of Birth: <input type="checkbox" ng-model="hidedob"/>
<input type="button"  ng-click="mail()" value="Echo">
<div>{{error}}</div>
	<table>
		<tr>
			<th ng-click="sortData('fname')">
				First Name<div ng-class="getSortClass('fname')"></div>
			</th>
			<th ng-click="sortData('lname')">
				Last Name<div ng-class="getSortClass('lname')"></div>
			</th>
			<th ng-click="sortData('email')">
				Email<div ng-class="getSortClass('email')"></div>
			</th>
			<th ng-click="sortData('contact')">
				Contact<div ng-class="getSortClass('contact')"></div>
			</th>
			<th ng-click="sortData('dob')" ng-hide="hidedob">
				Date of Birth<div ng-class="getSortClass('dob')"></div>
			</th>
			<th ng-click="sortData('dob')" ng-show="hidedob">
				Date of Birth<div ng-class="getSortClass('dob')"></div>
			</th>
			<th ng-click="sortData('gender')">
				Gender<div ng-class="getSortClass('gender')"></div>
			</th>
			<th>
				Action
			</th>
		</tr>
		<tr ng-repeat="names in cand | limitTo:rowlimit | filter:search | orderBy:sortColumn:reverseSort">
			<td>
				{{names.fname|uppercase}}
			</td>
			<td>
				{{names.lname|uppercase}}
			</td>
			<td>
				{{names.email}}
			</td>
			<td>
				{{names.contact}}
			</td>
			<td ng-hide="hidedob">
				{{names.dob|date:"MM/dd/yyyy"}}
			</td>
			<td ng-show="hidedob">
				########
			</td>
			<td>
				{{names.gender}}
			</td>
			<td>
		<!---<a href="<?php echo base_url();?>index.php/Controller/view/{{names.id}}">	--><input type="button" value="View" ng-click="view(names)">

				
			
		<!---<a href="<?php echo base_url();?>index.php/Controller/edit/{{names.id}}">	--><input type="button" value="Edit">
				
			</td>
		</tr>
	</table>
	<div ng-show="Isvisible">
	<table>
		<tr>
			<th>
				Field Name
			</th>
			<th>
				Information
			</th>
			
		</tr>
		<tr>
			<td>
			First Name	
			</td>
			<td>
				{{cand2.fname}}
			</td>
			</tr>
			<tr>
			<td>
				Last Name
			</td>
			<td>
				{{cand2.lname}}
			</td>
			</tr>
			
		</tr>
	</table>
	
	</div>
</body>
</html>