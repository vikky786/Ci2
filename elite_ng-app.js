// /*
// * @package     AngularJs
// * @subpackage  --
// * @category    Module
// * @author      vikas kushwaha
// */
// var Myapp=angular.module('Mymodule',['angularUtils.directives.dirPagination'])
// /*
// *Mycontroller for datatable in User managment section.  
// */
// .controller('Mycontroller',function($http,$scope,$timeout){
  // $scope.rowlimit=10;
  // $scope.Isvisible=false;
  // $scope.sortColumn="id";
  // $scope.reverseSort=false;
  // $scope.sortData= function(column)
  // {
    // $scope.reverseSort=($scope.sortColumn==column) ? !$scope.reverseSort :false;
    // $scope.sortColumn=column;
  // }
  // $scope.getSortClass=function(column){

    // if($scope.sortColumn==column){
      // return $scope.reverseSort ? 'fa fa-caret-down':'fa fa-caret-up'
    // }
    // return "";
  // }

  // var success=function(response){
    // $scope.sucess=response.data.user;
    // $scope.brand=response.data.brand;
    // $scope.check=false;
    // $scope.count=response.data.count;
    // $scope.count_brand=response.data.count_brand;
  // }
  // var failed=function(response){
    // $scope.failed=response.data;
    // console.log($scope.failed);
  // }

  // $http({
    // method:"Get",
    // url:baseurl+"Admin/dashboard_data"
  // })
  // .then(success,failed);
// /*
// * delete function to delete user.  
// */
  // $scope.delete=function(user)
  // {
    // var success=function(response)
    // {
      // $scope.sucess=response.data.user;
      // $scope.check=true;
      // $scope.msg="User's Account Deleted Successfully.";
      // $scope.count=response.data.count;
      // $scope.timeout=function(){
      // $scope.check=false;
      // }     
      // $timeout($scope.timeout, 2000);
      // console.log($scope.sucess);
    // }
    // var failed=function(response)
    // {
      // $scope.fail=response.data;
      // console.log($scope.fail)
    // }
    // $http({
      // method:"POST",
      // url:baseurl+"Admin/delete_profile/"+user.id
    // })
    // .then(success,failed)
  // }  
  // $scope.delete_brand=function(brands)
  // {
    // var success=function(response)
    // {
      // $scope.brand=response.data.brand;
      // $scope.check=true;
      // $scope.msg="Brand Deleted Successfully.";
      // $scope.count_brand=response.data.count_brand;
      // $scope.timeout=function(){
      // $scope.check=false;
      // }     
      // $timeout($scope.timeout, 2000);
      // console.log($scope.sucess);
    // }
    // var failed=function(response)
    // {
      // $scope.fail=response.data;
      // console.log($scope.fail)
    // }
    // $http({
      // method:"POST",
      // url:baseurl+"Admin/delete_brand/"+brands.id
    // })
    // .then(success,failed)
  // }  
// }) 

// /*Mycontroller end here.*/  


// /*
// * Login controller for validate user and session.  
// */
// .controller('Login',function($scope,$http,$window,$location){
  // $scope.email="";
  // $scope.user="";
  // $scope.password="";
  // $scope.forget_password=function()
  // { $scope.loding=true;
    // var success=function(response)
    // { $scope.sucess=response.data;
      // $scope.loding=false;
      // console.log($scope.sucess);
    // }
    // var failed=function(response)
    // { $scope.fail=response.data;
      // console.log($scope.fail)
    // }
    // $http({
      // method:"POST",
      // url:baseurl+"Login/forget_password_data/",
      // data:{"email":$scope.email}
    // })
    // .then(success,failed)
// }
// $scope.login=function()
// {
// var success=function(response)
// {
  // $scope.sucess=response.data;
  // if($scope.sucess.check==1){
    // $scope.error=($scope.sucess.user_er!='') ? "has-error" :"";
    // $scope.error2=($scope.sucess.password_er!='') ? "has-error":"";
    // console.log($scope.sucess);
  // }else if($scope.sucess.check==0){
    // $scope.error='';
    // $scope.error2='';
    // $window.location.href = $scope.sucess.redirect;
    // console.log($scope.sucess);
  // }else{
    // $scope.error='';
    // $scope.error2='';
    // console.log($scope.sucess);
  // }
// }
// var failed=function(response)
// {  $scope.fail=response.data;
   // console.log($scope.fail)
// }
// $http({
  // method:"POST",
  // url:baseurl+"login/login_validate/",
  // data:{"user":$scope.user,"password":$scope.password}
// })
// .then(success,failed)
// }
// })
// /*login controller end here.*/ 

// /*
// * Brand controller for validate user and session.  
// */

