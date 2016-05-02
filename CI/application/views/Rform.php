<section class="content">
  <center><h1>{{CurrentDate | date:'medium'}}</h1></Center>
<span ng-show="success.status">
<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4>  <i class="icon fa fa-remove"></i> Error</h4>
                    Ragistration Failed Due to error.                 
                    </div>
                  </span>
                  <span ng-show="success.status2">
<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                   Registration Successfully completed.                 
                    </div>
                  </span>

          <div class="row">

            <!-- left column -->
            <div class="col-md-6">
            
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                
                  <h3 class="box-title"><li class="fa fa-user">&nbspAdd User</li> </h3>
                </div><!-- /.box-header -->
               <!--{{CurrentDate| date:"HH:mm:ss"}}-->
                <!-- form start -->
                <form role="form" ng-submit="submit()" method="post" name="form" novalidate>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      
                      <input type="text" name="fname" ng-model="fname" value="fgdf" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                     <!--  <span style="color:red" ng-show="form.fname.$touched && form.fname.$invalid">First Name is required.</span> -->
                      <span style="color:red">{{success.fname_er}}</span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" name="lname" ng-model="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                      <!-- <span style="color:red" ng-show="form.lname.$touched && form.lname.$invalid">Last Name is required.</span> -->
                      <span style="color:red">{{success.lname_er}}</span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">DOB</label>

                      <input type="date" name="dob" ng-model="dob" class="form-control"  placeholder="dd/mm/yyy" required>
                     <!--  <span style="color:red" ng-show="form.dob.$touched && form.dob.$invalid">DOB is required.</span> -->
                      <span style="color:red">{{success.lname_er}}</span>
                    </div>
                    <div class="form-group" ng-repeat="emails in email">
                      <label for="exampleInputEmail1" >Email address</label>
                      <input type="text" name="email{{emails.id}}" ng-model="emails.email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required><i class="fa fa-remove btn" ng-show="$last" style="color:red" ng-click="remove()"> Remove</i>
                      <i class="fa fa-plus btn" style="color:green" ng-show="$last" ng-click="append()"> Add Email</i>
                       <!-- <span style="color:red" ng-show="form.email.$touched && form.email.$invalid">Email is required</span> -->
                      <!--  <span style="color:red" ng-show="form.email.$error.email">Invalid Email Format.</span> -->
                      <span style="color:red">{{success.email_er}}</span>
                    </div>
                    {{email}}
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contact</label>
                      <input type="text" name="contact" ng-model="contact" class="form-control" id="exampleInputPassword1" placeholder="Contact" required>
                      <!--  <span style="color:red" ng-show="form.contact.$touched && form.contact.$invalid">Contact is required.</span> -->
                      <span style="color:red">{{success.contact_er}}</span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <br>
                        <span style="color:red">{{success.gender_er}}</span>
                      <br>
                      <label>
                      Male
                      <input type="radio"  name="gender"  ng-model="gender" value="Male" class="flat-red" >
                     
                    </label>
                    <label>
                    Female
                      <input type="radio" name="gender" ng-model="gender" value="Female" class="flat-red">
                     
                    </label>
                    
                    </div>
                     <div class="form-group">
                     <label>  Profile Picture:</label> <input type="file" ngf-select="" ng-model="file" name="file" ngf-accept="'image/*'" required="">
              <i ng-show="Form.file.$error.required">*required</i>
              <br>

             
             
                    </div>
                   
                    
                  </div><!-- /.box-body -->
                   <div class="box-footer">
                    <button type="submit"  data-toggle="tooltip" data-placement="top" title="Add User" class="btn btn-primary tool">Submit</button>
                  </div>
                  </form>
                  </div>
                  </div>
                  <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><li class="fa fa-list">&nbspUser Detail</li></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                   <div class="form-group">
                      
                    <label for="exampleInputEmail1">Profile Image:&nbsp</label>
                     <img ngf-src="user.file" class="thumb">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name:&nbsp</label>{{user.fname}}
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name:&nbsp</label>{{user.lname}}
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date of Birth:&nbsp</label>{{user.dob}}
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address:&nbsp</label>{{user.email}}
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contact:&nbsp</label>{{user.contact}}
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gender:&nbsp</label>{{user.gender}}
                    
                    </div>
                   
                    
                  </div><!-- /.box-body -->
                   
                  </form>
                  </div>
                  </div>
                  </div>

                  </section>
