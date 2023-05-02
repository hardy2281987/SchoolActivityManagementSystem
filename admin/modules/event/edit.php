<?php  
    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $event = New Event();
  $res = $event->single_event($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
  <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Event</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div> 
                
                   
                 <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "EVENT_TEXT">Title:</label>

                      <div class="col-md-10">
                        <input name="EVENTID" type="hidden" value="<?php echo $res->EVENTID ; ?>">
                         <input class="form-control input-sm" id="EVENT_TEXT" name="EVENT_TEXT" placeholder=
                            "Title" type="text" value="<?php echo $res->EVENT_TEXT ; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "EVENT_WHAT">Body:</label>

                      <div class="col-md-10">
                            <textarea  class="form-control input-sm" id="EVENT_WHAT" name="EVENT_WHAT" placeholder=
                            "Body" rows="12" cols="60"><?php echo $res->EVENT_WHAT; ?></textarea>
                        
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "EVENT_WHEN">When:</label>

                      <div class="col-md-4">
                          <div class='input-group date'>
                            <input type='text' id="datetimepicker2" name="EVENT_WHEN" class="form-control TRANSDATE" value="<?php echo $res->EVENT_WHEN;?>" placeholder="mm/dd/yyyy hh:mm" />
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
                      "EVENT_WHERE">Location:</label>

                      <div class="col-md-10">
                           <input class="form-control input-sm" id="EVENT_WHERE" name="EVENT_WHERE" placeholder=
                            "Where" type="text" value="<?php echo $res->EVENT_WHERE ; ?>">
                      </div>
                    </div>
                  </div>


   
 
                 

            
             <div class="form-group">
                    <div class="col-md-11">
                      <label class="col-md-2 control-label" for=
                      "idno"></label>

                      <div class="col-md-10">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                       </div>
                    </div>
                  </div>
 
        </form>
       