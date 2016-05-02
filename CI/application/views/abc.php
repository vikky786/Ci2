<html>
<head>
<script src=<?php echo base_url()?>assets/js/angular.js></script>
<script src=<?php echo base_url()?>assets/js/angular-messages.js></script>
	<script src=<?php echo base_url()?>assets/js/jquery-1.12.0.js></script>
	<script src=<?php echo base_url()?>assets/custom/script.js></script>
	<script src=<?php echo base_url()?>assets/bootstrap/js/bootstrap.js></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
</head>
<div ng-app="myModule9" ng-controller="myController9">
<table>
<tr>
<td>
Email
</td>
<td>
Password
</td>
</tr>
<tr ng-repeat="detail in sucess2">
<td>
{{detail.email}}
</td>
<td>
{{detail.pwd}}
</td>
</tr>
</table>
</div>
</body>
</html>