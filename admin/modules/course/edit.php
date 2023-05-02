<?php  
   // if (!isset($_SESSION['TYPE'])=='Administrator'){
   //    redirect(web_root."index.php");
   //   }

  @$courseid = $_GET['id'];
    if($courseid==''){
  redirect("index.php");
}
  $course = New Course();
  $singlecourse = $course->single_course($courseid);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

              <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Edit Course</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                 
                           <input class="form-control input-sm" id="courseid" name="courseid" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $singlecourse->COURSEID; ?>">
                      
                 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Course:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="<?php echo $singlecourse->COURSE; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DESCRIPTION">Description:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="DESCRIPTION" name="DESCRIPTION" placeholder=
                            "Description" type="text" value="<?php echo $singlecourse->DESCRIPTION; ?>">
                      </div>
                    </div>
                  </div>

                 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn_kcctc" name="save" type="submit" >Save</button>
                         </div>
                    </div>
                  </div>

              
       
 
        </form>
       