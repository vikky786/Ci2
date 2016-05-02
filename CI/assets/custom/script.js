var myApp= angular
                  .module('myModule',[])
                  .controller('myController',function($scope,$http,$log){
          
     var sucess=function(response){

      $scope.cand=response.data;
      $log.info(response);
     };

     var failed =function(response){

      $scope.error=response.data;
      $log.info(response);
     };




          $http({
               method:'GET',
              url:"http://localhost/CI/index.php/Controller"

               })
           .then(sucess,failed);
            
             /* var employee=[
                     {name:'vikas',dob:new Date("03-18-1994"),gender:'male',salary:50000,currency:50000},
                     {name:'rahul',dob:new Date("11-21-1994"),gender:'male',salary:60000,currency:50000},
                     {name:'sandeep',dob:new Date("12-04-1992"),gender:'male',salary:70000,currency:50000},
                     {name:'sharad',dob:new Date("08-08-1993"),gender:'male',salary:80000,currency:50000},
                     {name:'abhishek',dob:new Date("12-03-1994"),gender:'male',salary:90000,currency:50000},
                     {name:'mritunjay',dob:new Date("12-03-1994"),gender:'male',salary:100000,currency:50000},
                  ];
       */           //$scope.employee=employee;
            //$scope.name=employee;
            //Object.response.data;
           
           // $scope=response.data;
           // alert($scope);
          // ("#view").hide();
         
           
           // $scope.cand=response.data;
            $scope.rowlimit=5;
             $scope.Isvisible=false;
            $scope.sortColumn="fname";
            $scope.reverseSort=false;
            
            $scope.sortData= function(column)
            {
              $scope.reverseSort=($scope.sortColumn==column) ? !$scope.reverseSort :false;
              $scope.sortColumn=column;
            }
            $scope.getSortClass=function(column){

              if($scope.sortColumn==column){

                return $scope.reverseSort ? 'glyphicon glyphicon-menu-down':'glyphicon glyphicon-menu-up'
              }
              return "";
            }
           
            $scope.view= function(response)
            {
           $scope.cand2=response;

           $scope.Isvisible= $scope.Isvisible ? false:true;
           //$scope.view3== $scope.view3 ? $scope.view3: $scope.view5;

            }

            $scope.mail=function()
            {
              
              var base=  $http.get("http://localhost/CI/index.php/Controller");
             alert(base);
          //$scope.showhide=buttonshow;
         //  $scope.cand='##########';

            }

          //alert( $scope.cand);
          // console.log($scope.cand=response.data);
                    });

                  



                 
 var myApp=angular
              .module('myModule3',[])
              .controller('myController3',function($scope){
        var employee={
          Name:'vikas',
          last:'kushwaha',
          gender:'male'
        };
  $scope.employee=employee;
  

});


  var myApp= angular.module('myModule2',[])
                    
                    
                    myApp.controller('myController2',function($scope,$http,$log){

                     // $scope.email="asasd";
                      //$scope.pwd="sdassd";

                      $scope.submit=function()

                      {
                        var sucess=function(response){
                          $scope.email=null;
                          $scope.pwd=null;
                        $scope.cand=response.data;
                        $log.info(response);
                     };

                       var failed =function(response){

                      $scope.error=response.data;
                      $log.info(response.data);
                     };
  
                                  $http(
                                  {
                       method:'POST',
                       url:'http://localhost/CI/index.php/Controller/test2',
                       data:({email:$scope.email,pwd:$scope.pwd})

                                    }
            
                      )
                         .then(sucess,failed);

                  }
                      

                  });     
 myApp.controller('myController9',function($scope,$http,$log){
                        var sucess2=function(response){

                          $scope.sucess2=response.data;
                          alert('dfsdf');
                        }

                        var failed2=function(response){
                          $scope.failed2.response.data;
                        }
                         $http({

                          method:'GET',
                          url:'http://localhost/CI/index.php/Controller/data_get'
                         })
                         .then(sucess2,failed2);


                    });

var myApp=angular.module('myModule0',[])
                 .controller("myController0",function($scope,$http,$log)
                 {
                 
                  var sucess2=function(response){

                          $scope.sucess2=response.data;
                          $log.info($scope.sucess2);
                        }

                        var failed2=function(response){
                          $scope.failed2=response.data;
                        }
                         $http({

                          method:'GET',
                          url:'http://localhost/CI/index.php/Controller/student'
                         })
                         .then(sucess2,failed2);

                 });

       var myApp=angular.module('myModule5',['ngRoute','angularUtils.directives.dirPagination','ui.bootstrap','ngFileUpload'])
                         .config(function ($routeProvider){
                              $routeProvider
                              .when("/adduser",{
                                templateUrl:baseurl+'Controller/add_user',
                                controller:"addController"
                              })
                              .when("/manageuser",{

                                templateUrl:baseurl+'index.php/Controller/manage',
                                controller:"manageController"
                              })
                              .when("/profile/:id",{

                                templateUrl:baseurl+'index.php/Controller/profile_view',
                                controller:"profileController"
                              })
                              .when("/upload",{

                                templateUrl:baseurl+'index.php/Controller/upload_view',
                                controller:"MyCtrl"
                              })
                              .otherwise({
                                 templateUrl:baseurl+'index.php/Controller/Page_not_found',
                              })
                              //$locationProvider.html5Mode(true);
                        }) 
                         .factory('StudentDataOp', ['$http', function ($http) {

                         // var urlBase = 'http://localhost:2307/Service1.svc';
                          var StudentDataOp = {};

                          StudentDataOp.getStudents = function () {
                              return $http({

                                method:"GET",
                                url:"http://localhost/CI/index.php/Controller/student"
                               })
                          };

                         /* StudentDataOp.addStudent = function (stud) {
                              return $http.post(urlBase + '/AddStudent', stud);
                          };*/
                          return StudentDataOp;
                        }])


                        .controller('addController',function($scope,$http,$interval){
                           $scope.updateTime=function(){
                            
                            $scope.CurrentDate=new Date();
                           }     
                           
                         $interval($scope.updateTime, 1000);
                          $scope.fname="";
                          $scope.lname="";
                          $scope.dob="";
                          $scope.gender="";
                          $scope.contact="";
                          $scope.email=[{email:' ',id:0}];;
                             if($scope.email==null)
                             {
                              alert('fghfgh');
                             }
                              // console.log($scope.fname);
                         $scope.append = function(){
                          var len=$scope.email.length+1;
                          $scope.email.push({'email':' ','id':len});
                         // alert("helo i m working");
                         console.log(len);
                         }

                         $scope.remove=function(){
                          var lastitem=$scope.email.length-1;
                            $scope.email.splice(lastitem);
                         }
                           $scope.submit=function(){
                         
                         
                           
                          var sucess=function(response){
                               //if(response.data)
                               //$scope.user="";
                            $scope.success=response.data;
                          console.log($scope.success);
                            //console.log($scope.success.status);
                            if($scope.success.status=='error'){
                               console.log($scope.success.status);
                            }
                            else{
                          $scope.fname="";
                          $scope.lname="";
                          $scope.dob="";
                          $scope.gender="";
                          $scope.contact="";
                          $scope.email=[{email:' ',id:0}];
                              console.log($scope.success.status2);
                            }
                            //$scope.user;
                          }
                          var failed=function(response)
                          {
                            $scope.fail=response.data;
                            console.log($scope.fail);
                          }

                         
                          $http({

                            method:"POST",
                            data:{fname:$scope.fname,
                              lname:$scope.lname,
                              dob:$scope.dob,
                              gender:$scope.gender,
                              email:$scope.email,
                              contact:$scope.contact,
                              file:$scope.file},
                            dataType:'json',
                            url:baseurl+"Controller/add_student"
                          })
                          .then(sucess,failed)
                        }
                        })
                        .controller('manageController',function($scope,$http,StudentDataOp){
                                 $scope.rowlimit=5;
                                 $scope.Isvisible=false;
                                $scope.sortColumn="fname";
                                $scope.reverseSort=false;
                               $scope.sortData= function(column)
                              {
                                $scope.reverseSort=($scope.sortColumn==column) ? !$scope.reverseSort :false;
                                $scope.sortColumn=column;
                              }
                              $scope.getSortClass=function(column){

                                if($scope.sortColumn==column){

                                  return $scope.reverseSort ? 'fa fa-caret-down':'fa fa-caret-up'
                                }
                                return "";
                              }

                              /*StudentDataOp.getStudents()
                                    .$promise
                                    .then(
                                      function(data){
                                        console.log(data);
                                      });*/
                             

                                 StudentDataOp.getStudents()
                                  .success(function (studs) {
                                      $scope.sucess = studs;
                                      console.log($scope.sucess)
                                  })
                                  .error(function (error) {
                                      $scope.status = 'Unable to load customer data: ' + error.message;
                                  });
                               /* var sucess=function(response){
                                $scope.sucess=response.data;
                                console.log("success");
                               }

                               var fail=function(response){
                                $scope.fail=response.data;
                                console.log("failed");
                               }*/
                               
                              
                              
                               

                               $scope.delete=function(name)
                               {
                                
                                var success=function(response)
                                {
                                  $scope.sucess=response.data;
                                  console.log($scope.sucess);
                                }
                                var failed=function(response)
                                {
                                  $scope.fail=response.data;
                                  console.log($scope.fail)
                                }

                                $http({

                                  method:"POST",
                                  url:baseurl+"controller/delete/"+name.id

                                })
                                .then(success,failed)

                               }
                               
                        })
                        .controller("profileController",function($http,$scope,$routeParams){

                          var success=function(response){
                           
                            $scope.sucess=response.data;
                            console.log($scope.sucess);
                          }
                          var failed=function(response){
                            $scope.failed=response.data;
                            console.log($scope.failed);
                          }
                        // alert($routeParams.id);
                          $http({

                            url:baseurl+'controller/profile/'+$routeParams.id,
                        //  params:{id:$routeParams.id},
                            method:'get'
                          
                          })
                          .then(success,failed);

                          $scope.edit_show=false;
                          $scope.value="Edit";
                          $scope.class="fa fa-edit"
                          $scope.show=function()
                          {
                           
                            $scope.edit_show= $scope.edit_show ? false:true;
                             $scope.value== $scope.value ? "Edit":"Cancel";
                              $scope.class== $scope.class ? "fa fa-edit":"fa fa-cross";

                            //$scope.edit_show=true;
                          }

                           $scope.edit=function(name)
                               {
                              
                               var success=function(response)
                                {
                                  $scope.sucess=response.data;
                                  console.log($scope.sucess);
                                   $scope.edit_show= $scope.edit_show ? false:true;
                                }
                                var failed=function(response)
                                {
                                  $scope.fail=response.data;
                                  console.log($scope.fail)
                                }

                                $http({

                                  method:"POST",
                                  data:name,
                                  url:baseurl+"controller/edit/"+name.id,

                                })
                                .then(success,failed)
                               }
                               

                        })
                        .controller('MyCtrl', function ($scope, Upload,$http) {
    // upload later on form submit or something similar
    $scope.submit = function() {
      if ($scope.form.file.$valid && $scope.file) {
        $scope.upload($scope.file);
      }
    };

    // upload on file select or drop
    $scope.upload = function () {
   // alert($scope.u);
      $http({
             method:'POST',
             url:baseurl+"controller/upload/12",
            data:$scope.u
        }).then(function (resp) {
         // alert('ok im working');
            console.log('Response: ' + resp.data);
        }, function (resp) {
            console.log('Error status: ' + resp.status);
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            console.log('progress: ' + progressPercentage + '% ' + evt.config.data);
        });
    };
  /*  // for multiple files:
    $scope.uploadFiles = function (files) {
      if (files && files.length) {
        for (var i = 0; i < files.length; i++) {
          Upload.upload({data: {file: files[i]}});
        }
        // or send them all together for HTML5 browsers:
        Upload.upload({data: {file: files}});
      }
    }*/
});


    myApp.directive('timer', function ($timeout, $compile) {
        return  {
            restrict: 'E',
            replace: false,
            scope: {
                interval: '=interval',
                startTimeAttr: '=startTime',
                countdownattr: '=countdown'
            },
            controller: function ($scope, $element) {
                if ($element.html().trim().length === 0) {

                    $element.append($compile('<span> {{date2}}Days </span>')($scope));
                }
                
                $scope.startTime = null;
                $scope.timeoutId = null;
                $scope.countdown = $scope.countdownattr && parseInt($scope.countdownattr, 10) > 0 ? parseInt($scope.countdownattr, 10) : undefined;
                $scope.isRunning = false;

                $scope.$on('timer-start', function () {
                    $scope.start();
                });

                $scope.$on('timer-resume', function () {
                    $scope.resume();
                });

                $scope.$on('timer-stop', function () {
                    $scope.stop();
                });

                function resetTimeout() {
                    if ($scope.timeoutId) {
                        clearTimeout($scope.timeoutId);
                    }
                }

                $scope.start = $element[0].start = function () {
                    $scope.startTime = $scope.startTimeAttr ? new Date($scope.startTimeAttr) : new Date();
                   // $scope.startTime =  new Date();
                    resetTimeout();
                    tick();
                };

                $scope.resume = $element[0].resume = function () {
                    resetTimeout();
                    $scope.startTime = new Date() - ($scope.stoppedTime - $scope.startTime);
                   // $scope.startTime = new Date() 
                    tick();
                };

                $scope.stop = $element[0].stop = function () {
                    $scope.stoppedTime = null;
                    resetTimeout();
                    $scope.timeoutId = new Date();
                };

                $element.bind('$destroy', function () {
                    resetTimeout();
                });

                var tick = function () {
                    if ($scope.countdown > 0) {
                        $scope.countdown--;
                    }
                    else if ($scope.countdown <= 0) {
                        $scope.stop();
                    }

                    $scope.millis = new Date() - $scope.startTime;
                    //$scope.millis = new Date() ;

                    if ($scope.countdown > 0) {
                        $scope.millis = $scope.countdown * 1000
                    }

                   // $scope.seconds = Math.floor(($scope.millis / 1000) % 60);
                   // $scope.minutes = Math.floor((($scope.millis / (1000 * 60)) % 60));
                   // $scope.hours = Math.floor((($scope.millis / (1000 * 60 * 60)) % 24));
                   // $scope.days = Math.floor((($scope.millis / (1000 * 60 * 60)) / 24));
                    $scope.date2=new Date();
                    //We are not using $timeout for a reason. Please read here - https://github.com/siddii/angular-timer/pull/5
                    $scope.timeoutId = setTimeout(function () {
                        tick();
                        $scope.$apply();
                    }, $scope.interval);

                    $scope.$emit('timer-tick', {timeoutId: $scope.timeoutId, millis: $scope.millis});
                };

                $scope.start();
            }
        };
    });
    



   

                  