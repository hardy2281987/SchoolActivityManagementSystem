                      <?php 
                    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Post New Announcement</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
  
                <div class="form-group">
                    <div class="col-md-11">
                       <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_TEXT">Title:</label>
                        <div class="col-md-10">
                           <input class="form-control input-sm" id="ANNOUNCEMENT_TEXT" name="ANNOUNCEMENT_TEXT" placeholder=
                            "Title" type="text" value="">
                        </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-11">
                       <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_WHAT">Body:</label>
                        <div class="col-md-10">
                          <textarea  class="form-control input-sm" id="ANNOUNCEMENT_WHAT" name="ANNOUNCEMENT_WHAT" placeholder=
                            "Body" rows="6"  ></textarea>
                        </div>
                    </div>
                  </div>     


                   <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_WHEN">When:</label>

                      <div class="col-md-4">
                          <div class='input-group date' >
                            <input type='text' id='datetimepicker2' name="ANNOUNCEMENT_WHEN" class="form-control input-group date TRANSDATE" placeholder="mm/dd/yyyy hh:mm" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>
                  </div>


          <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "ANNOUNCEMENT_WHERE">Location:</label>

                      <div class="col-md-10">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="ANNOUNCEMENT_WHERE" name="ANNOUNCEMENT_WHERE" placeholder=
                            "Where" type="text" value="">
                      </div>
                    </div>
                  </div>

              

            
             <div class="row">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>

                      <div class="col-md-10">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

               
        
          
        </form>
       