<section class="content" >
        <div class="row">
            <div class="col-md-12">
              
               

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Candidate List</h3>
                </div><!-- /.box-header -->
                <div class="box-body" ng-controller="manageController">

                  <table  class="table table-bordered table-striped" >
                  <div class="row">
                  <div class="col-md-3">
                   <div class="input-group">
              <input type="text" ng-model="search.fname" class="form-control has-feedback" placeholder="Search...">
              <input type="text" ng-model="search.lname" class="form-control has-feedback" placeholder="Search...">
              
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
              
            </div>
            </div>
            
          
          

            <div class="col-md-2 pull-right">

            <div class="input-group">
          
            <input type="number" ng-model="rowlimit" min="0" step="5" class="form-control has-feedback">

              </div>
            
              
            </div>
            </div>
                    <thead>
                      <tr>
                        <th ng-click="sortData('fname')" style="cursor:pointer">
                        First name<i ng-class="getSortClass('fname')" class="pull-right"></i></th>
                        <th ng-click="sortData('lname')" style="cursor:pointer">
                        Last name<i ng-class="getSortClass('lname')" class="pull-right"></i></a></th>
                        <th ng-click="sortData('email')" style="cursor:pointer">
                        Email<i ng-class="getSortClass('email')"class="pull-right"></i></a></th>
                        <th ng-click="sortData('contact')" style="cursor:pointer">
                        Contact<i ng-class="getSortClass('contact')"class="pull-right"></i></a></th>
                        <th ng-click="sortData('gender')" style="cursor:pointer">
                        Gender<i ng-class="getSortClass('gender')"class="pull-right"></i></a></th>
                        <th>Picture</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr dir-paginate="name in sucess |  filter:search |itemsPerPage:rowlimit| orderBy:sortColumn:reverseSort">
                        <td>{{name.fname|uppercase}}</td>
                        <td>{{name.lname}}</td>
                        <td>{{name.email}}</td>
                        <td> {{name.contact}}</td>
                        <td>{{name.gender}}</td>
                        <td> <img ngf-src="name.pic" class="thumb"></td>
                        <td><a href=""  data-toggle="modal" data-target="#delete{{name.id}}"><i class="fa fa-trash"></i></a>&nbsp
                        <div id="delete{{name.id}}" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <b><h4 class="modal-title fa fa-trash fa-lg" style="color:red;"> Delete</h4></b>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete {{name.fname}} {{name.lname}}'s account ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                 <button type="button" ng-click="delete(name)" class="btn btn-default" data-dismiss="modal">Yes</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <a href="#/profile/{{name.id}}"><i class="fa fa-eye"></i></a>&nbsp
                       <!-- <div id="view{{name.id}}" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            Modal content
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <b><h4 class="modal-title fa fa-user fa-lg" style="color:green"> Profile</h4></b>

                              </div>
                              <div class="modal-body">
                                <p class="fa fa-user"> Name : {{name.fname}} {{name.lname}}</p>
                                <hr>
                                <p class="fa fa-envelope"> Email : {{name.email}}</p>
                                <hr>
                               <p class="fa fa-phone"> Contact : {{name.contact}}</p>
                               <hr>
                               <p>Gender: {{name.gender}}</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default fa fa-remove" data-dismiss="modal"> Close</button>
                                 
                              </div>
                            </div>

                          </div>
                        </div>-->

                        <a href="" data-toggle="modal" data-target="#edi{{name.id}}"><i class="fa fa-edit"></i></a>
                        <div id="edi{{name.id}}" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <b><h4 class="modal-title fa fa-edit fa-lg" style="color:blue"> Edit</h4></b>
                              </div>
                              <div class="modal-body">
                                 <form role="form"  method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text"  ng-model="name.fname" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text"  ng-model="name.lname" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="text" ng-model="name.email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contact</label>
                      <input type="text" ng-model="name.contact" class="form-control" id="exampleInputPassword1" placeholder="Contact">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <input type="text" value="{{name.gender}}"ng-model="name.gender" class="form-control" id="exampleInputPassword1" placeholder="Gender">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="file" ng-model="user.file">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                   
                    
                  </div><!-- /.box-body -->
                   <div class="box-footer">
                  
                  </div>
                 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                 <button type="button" class="btn btn-primary" class="btn btn-primary" ng-click="edit(name)" data-dismiss="modal">Save</button>
                                  </form>
                              </div>
                            </div>

                          </div>
                        </div></td>
                 </tr>

                  </table>
                  <center><dir-pagination-controls
                   max-size="5"
                   direction-links="true"
                   boundary-links="false" >
                </dir-pagination-controls></center>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <tr>

</tr>
                        </tbody>
                     
                        
  


                    <!-- Trigger the modal with a button -->


<!-- Modal -->

          <!-- Info boxes -->
   
        </section>