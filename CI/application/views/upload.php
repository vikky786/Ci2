<section class="content">
 
  <timer ></timer>
             
 <div>
        <div>
          <form name="myForm" ng-submit="upload()">
            <fieldset class="ng-binding">
       
              <legend>Upload on form submit</legend>
              Username: <input type="text" name="userName" ng-model="u.username" size="39" required="">
              <i ng-show="myForm.userName.$error.required">*required</i><br>
              Profile Picture: <input type="file" ngf-select="" ng-model="u.file" name="file" ngf-accept="'image/*'" required="">
              <i ng-show="myForm.file.$error.required">*required</i>
              <br>

              <button ng-disabled="!myForm.$valid" >Submit</button>
              <img ngf-src="u.file" class="thumb">
              <span class="progress" ng-show="picFile.progress >= 0">
                  <div style="width:{{picFile.progress}}%" ng-bind="file.progress + '%'" class="ng-binding"></div>
              </span>
              <span ng-show="file.result">Upload Successful</span>
            </fieldset>
            <br>
          </form>
        </div>
        
         
        </fieldset>
        <br>
      </div>
    
</section>