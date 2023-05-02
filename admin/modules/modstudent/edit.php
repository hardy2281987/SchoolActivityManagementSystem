<?php  
  @$IDNO = $_GET['id'];
 @$syid = $_GET['sy'];
  if($IDNO=='' ){
  redirect("index.php");
}
  $student = New Student();
  $singlestudent = $student->single_students($IDNO);
 

  ?>

 
 <style type="text/css">
.sidebar-left .main{
  float:right;
}
.idebar-left .sidebar{
  float:left;
}

.sidebar-right .main{
  float:left;
}
.idebar-right .sidebar{
  float:right;
}
 
</style>
 
        
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
  
        
          <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Edit Student</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
                
                         <input  id="IDNO" name="IDNO"  type="hidden" value="<?php echo $singlestudent->IDNO; ?>"> 
               
                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="<?php echo $singlestudent->FNAME; ?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Middle Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name" type="text" value="<?php echo $singlestudent->MNAME; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="<?php echo $singlestudent->LNAME; ?>" required>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Course:</label>

                      <div class="col-md-8">
                            <select class="form-control input-sm" name="COURSE" id="COURSE"> 
                                  <?php  
                                    $mydb->setQuery("SELECT * 
                                            FROM  `tblcourse` WHERE COURSEID='".$singlestudent->COURSE."'");
                                    $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php }  


                                    $mydb->setQuery("SELECT * 
                                      FROM  `tblcourse` WHERE COURSEID<>'".$singlestudent->COURSE."'");
                                      $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                        <?php } ?>



                              </select>
         
                      </div>
                    </div>
                  </div>

                        <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "DEPARTMENT">Department:</label>

                      <div class="col-md-8">
                            <select class="form-control input-sm" name="DEPARTMENT" id="DEPARTMENT"> 
                                  <?php  
                                    $mydb->setQuery("SELECT * 
                                            FROM  `tbldepartment` WHERE DEPARTMENTID='".$singlestudent->DEPARTMENT."'");
                                    $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php }  


                                    $mydb->setQuery("SELECT * 
                                      FROM  `tbldepartment` WHERE DEPARTMENTID<>'".$singlestudent->DEPARTMENT."'");
                                      $cur = $mydb->loadResultList();

                                        foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                        <?php } ?>



                              </select>
         
                      </div>
                    </div>
                  </div>


 
 
 
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value="<?php echo $singlestudent->ADDRESS; ?>" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "09*********" maxlength="11" type="text" value="<?php echo $singlestudent->PHONE; ?>" required>
                      </div>
                    </div>
                  </div>
 
 
                    <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn_kcctc" name="save" type="submit" >Save</button>  
                      </div>
                    </div>
                  </div>
 
<!--/.fluid-container-->
 
 </form>