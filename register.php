<?php  
require_once ("include/initialize.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>WVSU Calendar</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/jquery.dataTables.css"> 
<link href="<?php echo web_root; ?>css/kcctc.css" rel="stylesheet" media="screen"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/header.css"> 
  
<section id="title-header">
  <div class="title" data-aos="example-animation">
    <!-- <img src="img/home.png"> -->
      <p>Sign Up</p>
  </div>
</section>
 <div class="container"> 
    <div id="login-dp">
 <form class="form-horizontal span6" action="index.php?q=register" method="POST" enctype="multipart/form-data" id="login-nav">

 
          <!--        <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Id No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
                            "Student Id" type="Text" value="" required>
                      </div>
                    </div>
                  </div> -->

                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Middle Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value=""  required>
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
                                      FROM  `tblcourse`");
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
                                      FROM  `tbldepartment`");
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
                            "Address" type="text" value=""  required>
                      </div>
                    </div>
                  </div> 
                 
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "USERNAME">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
                            "Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PASS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS" placeholder=
                            "Password" type="password" value="">
                      </div>
                    </div>
                  </div>
  
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button type="submit" name="btnRegister" class="btn btn-primary btn-sm">Register</button>
                           
                     </div>
                    </div>
                  </div> 
        
 
          
        </form>
       </div>
</div>

<?php 
if (isset($_POST['btnRegister'])) {
    # code... 
    $autonumber = New Autonumber();
    $auto = $autonumber->set_autonumber("STUDENTID");

    $IDNO = date("Y").$auto->AUTO;


    $student = New Student();
    $student->IDNO          = $IDNO;
    $student->FNAME         = $_POST['FNAME'];
    $student->MNAME         = $_POST['MNAME'];
    $student->LNAME         = $_POST['LNAME'];
    $student->ADDRESS       = $_POST['ADDRESS']; 
    $student->PHONE         = $_POST['PHONE']; 
    $student->COURSE        = $_POST['COURSE']; 
    $student->DEPARTMENT    = $_POST['DEPARTMENT']; 
    $student->USERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']);
    // $student->PROIMAGE       = $location;
    $student->create(); 
 
 
    $autonumber = New Autonumber();
    $autonumber->auto_update("STUDENTID");

    message("Your now succefully registered. You can login now!","success");
    redirect("index.php?q=register");
}

?>
   <footer>
              <p align="left">&copy; WVSU Calendar</p>
     </footer>
 </section>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/fixnmix.js"></script> 
<script type="text/javascript" charset="utf-8">