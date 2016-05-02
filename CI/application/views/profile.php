
<section class="content" >
         <div class="row">
         <div class="col-md-12">
<a href="#/manageuser" class="btn btn-info pull-right" >Back</a>
         </div>
         </div>
         <br>
         
          <div class="row" >
       
           
                  <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><li class="fa fa-list">&nbspProfile</li></h3>
                  <span ng-hide="edit_show">
                  <h3 class="box-title pull-right"><li class="btn btn-info btn-xs {{class}}  " ng-click="show()">&nbspEdit</li></h3>
                  </span>
                  
                  
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" ng-repeat="name in sucess" ng-submit="edit(name)">
                  <div class="box-body">
                   
                    <div class="form-group">
                    <div class="col-md-12 row">
                      <label for="exampleInputEmail1">First Name:&nbsp</label>{{name.fname}}
                      <span ng-show="edit_show">
                    <label for="exampleInputEmail1" class="pull-right">First Name:&nbsp <input type="text"  ng-model="name.fname"></label>
                    </span>
                     </div>
                    </div>
                    <div class="form-group"> 
                     <div class="col-md-12 row">
                      <label for="exampleInputEmail1">Last Name:&nbsp</label>{{name.lname}}
                      <span ng-show="edit_show">
                       <label for="exampleInputEmail1" class="pull-right">Last Name:&nbsp <input type="text"  ng-model="name.lname"></label>
                       </span>
                      </div>
                    </div>
                     <div class="form-group"> 
                     <div class="col-md-12 row">
                      <label for="exampleInputEmail1">DOB:&nbsp</label>{{name.dob}}
                      <span ng-show="edit_show">
                       <label for="exampleInputEmail1" class="pull-right">DOB:&nbsp <input type="date"  ng-model="name.dob"></label>
                       </span>
                      </div>
                    </div>
                    <div class="form-group">
                     <div class="col-md-12 row">
                      <label for="exampleInputEmail1">Email address:&nbsp</label>{{name.email}}
                      <span ng-show="edit_show">
                       <label for="exampleInputEmail1" class="pull-right">Email:&nbsp <input type="text"  ng-model="name.email"></label>
                       </span>
                     </div>
                    </div>
                    <div class="form-group">
                     <div class="col-md-12 row">
                      <label for="exampleInputPassword1">Contact:&nbsp</label>{{name.contact}}
                      <span ng-show="edit_show">
                       <label for="exampleInputEmail1" class="pull-right">Contact:&nbsp <input type="text"  ng-model="name.contact"></label>
                       </span>
                    </div>
                    </div>
                    <div class="form-group">
                     <div class="col-md-12 row">
                      <label for="exampleInputPassword1">Gender:&nbsp</label>{{name.gender}}
                      <span ng-show="edit_show">
                       <label for="exampleInputPassword1" class="pull-right">Gender
                      
                      <label>
                      Male
                      <input type="radio"  name="gender"  ng-model="name.gender" value="Male" class="flat-red" >
                     
                    </label>
                    <label>
                    Female
                      <input type="radio" name="gender" ng-model="name.gender" value="Female" class="flat-red">
                     
                    </label>
                    </label>
                    </span>
                  </div><!-- /.box-body -->
                  <span ng-show="edit_show">
                   <div class="box-footer">
                    <button type="submit" ng-disabled="form.$invalid" data-toggle="tooltip" data-placement="top" title="Click To Save Change" class="btn btn-primary btn-xs fa fa-check">Submit</button>
                    </span>
                  </div>
                  </form>
                  </form>
                  </div>
                  </div>
                  </div>


                  </section> 
