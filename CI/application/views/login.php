<html>
<head>
<script src=<?php echo base_url()?>assets/js/angular.js></script>
<script src=<?php echo base_url()?>assets/js/angular-messages.js></script>
	<script src=<?php echo base_url()?>assets/js/jquery-1.12.0.js></script>
	
	<script src=<?php echo base_url()?>assets/bootstrap/js/bootstrap.js></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
</head>
<body ng-app="myModule2">
<div  ng-controller="myController2">
<div ng-messages="{{error}}" ng-messages-multiple></div>


<form class="form-inline" role="form" method="post" ng-submit="submit()">
  <div class="form-group">
    <label class="form-control" for="email">Email address:</label>
    <br>
    <input  class="form-control" id="email" ng-model="email" name="email">
  </div>
  <div class="form-group">
    <label class="form-control" for="pwd">Password:</label>
    <br>
    <input type="password" class="form-control" id="pwd" ng-model="pwd" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <input type="submit" value="submit">
</form>


<table>
<tr>
<td>
Email
</td>
<td>
Password
</td>
</tr>
<tr ng-repeat="detail in cand">
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
<script src=<?php echo base_url()?>assets/custom/script.js></script>
</html>