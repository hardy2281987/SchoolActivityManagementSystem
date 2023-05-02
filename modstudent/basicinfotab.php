 <div class="container"> 
  <div class="row">        
     <form class="form-horizontal span3" action="controller.php?action=edit" method="POST">
          <ul class="list-group" id="accordion">    
                <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Name 
                  <?php echo ': '.$singlestudent->FNAME.' '.$singlestudent->MNAME. ' ' .$singlestudent->LNAME; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                   
                        <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "FNAME">First Name:</label>

                            <div class="col-md-8">
                               <input class="form-control input-xs" id="FNAME" name="FNAME" placeholder=
                                  "First Name" type="text" value="<?php echo  $singlestudent->FNAME; ?>">
                            </div>
                          </div>
                        </div>

                         <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "MNAME">Middle Name:</label>

                            <div class="col-md-8">
                               <input class="form-control input-xs" id="FNAME" name="MNAME" placeholder=
                                  "Middle Name" type="text" value="<?php echo  $singlestudent->MNAME; ?>">
                            </div>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="col-md-8">
                            <label class="col-md-4 control-label" for=
                            "LNAME">Last Name:</label>

                            <div class="col-md-8">
                               <input class="form-control input-xs" id="LNAME" name="LNAME" placeholder=
                                  "Last Name" type="text" value="<?php echo  $singlestudent->LNAME; ?>">
                            </div>
                          </div>
                        </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label> 
                          <div class="col-md-8"> 
                            <button class="btn btn-primary" name="btnname" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div> 

                     
                   </div>
                 </div> 
               </li>

 
                <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Address 
                  <?php echo ': '.$singlestudent->ADDRESS; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseFour" class="panel-collapse collapse">
                   <div class="panel-body">
                     

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "ADDRESS">Address:</label>

                          <div class="col-md-8">
                             <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                                "Address" type="text" value="<?php echo $singlestudent->ADDRESS; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8"> 
                            <button class="btn btn-primary" name="btnadd" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div> 

                     
                   </div>
                 </div> 
               </li>

  
                <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Contact Number 
                  <?php echo ': '.$singlestudent->PHONE; ?>
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Edit <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseSeven" class="panel-collapse collapse">
                   <div class="panel-body">
                   

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "PHONE">Contact No.:</label>

                          <div class="col-md-8">
                             <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                                "Contact Number" type="text" value="<?php echo $singlestudent->PHONE; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8"> 
                            <button class="btn btn-primary" name="btnphone" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div> 

                     
                  </div>
                 </div> 
               </li>
 
               <li class="list-unstyled text-left panel">
                 <div class="panel-heading">Password :  
                    <span class="pull-right">
                      <a title="Edit" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Change Password <span class="glyphicon glyphicon-pencil"></span></a> 
                    </span>
                 </div>   
                 <div id="collapseNine" class="panel-collapse collapse">
                   <div class="panel-body">
                  

                      <div class="form-group">
                        <div class="col-md-8">
                         <label class="col-md-4 control-label" for=
                          "STUDPASS">Current:</label>
                          <div class="col-md-8">
                           <input size="30"  class="form-control input-sm" name="STUDPASS" type="password"/>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                         <label class="col-md-4 control-label" for=
                          "NEWSTUDPASS">New:</label>
                          <div class="col-md-8">
                          <input size="30"  class="form-control input-sm" name="NEWSTUDPASS" type="password"/>
                           </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8"> 
                            <button class="btn btn-primary" name="btnpass" type="submit" ><strong>Save</strong></button>
                         </div>
                        </div>
                      </div>

                    
                   </div>
                 </div> 
               </li> 
             </ul>  
            </form>
    </div>
 </div>