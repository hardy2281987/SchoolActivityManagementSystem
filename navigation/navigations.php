<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>School Activity Management System</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">  
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>css/header.css"> 
 
 
 <?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = $_SESSION['IDNO']; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}'";
    $mydb->setQuery($sql); 
    $notifcnt = $mydb->num_rows(); 
 ?>
</head>

<body >
 <section id="navigation">
   <div class="navbar navbar-fixed-top navbar-inverse  " role="navigation"  style="opacity:.9"> 
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  href="<?php echo web_root; ?>index.php" title="View Sites">School Activity Management System</a>
        </div>

        <div class="collapse navbar-collapse" > 
          <ul class="nav navbar-nav "> 
            <li class="<?php echo ($q == '') ? "active" : '';?>"><a href="<?php echo web_root.'index.php'; ?>">Home</a></li>
<?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = $_SESSION['IDNO']; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Event'";
    $mydb->setQuery($sql); 
    $notifcnt = $mydb->num_rows(); 
 ?>
            <li class="<?php echo ($q=='events') ? 'active' : ''; ?>"><a href="<?php echo web_root.'index.php?q=events'; ?>"> Events <div id="countnotifevent" class="label label-danger"><?php echo $notifcnt; ?></div> </a></li>
  <?php
  $q = isset($_GET['q']) ? $_GET['q'] : ""; 

    $IDNO = $_SESSION['IDNO']; 
    $sql = "SELECT * FROM tblstudentnotif WHERE IDNO = '{$IDNO}' AND TYPE='Announcement'";
    $mydb->setQuery($sql); 
    $notifcnt = $mydb->num_rows(); 
 ?>

            <li class="<?php echo ($q=='announcement') ? 'active' : ''; ?>"><a href="<?php echo web_root.'index.php?q=announcement'; ?>"> Announcement <div id="countnotifannouncement" class="label label-danger"><?php echo $notifcnt; ?></div> </a></li> 
          <!--    <li class="<?php echo ($q=='about') ? 'active' : ''; ?>"><a href="<?php echo web_root.'index.php?q=about'; ?>"> About Us</a></li>
              <li class="<?php echo ($q=='contact') ? 'active' : ''; ?>"><a href="<?php echo web_root.'index.php?q=contact'; ?>"> Contact Us</a></li> --> 
               <!-- <li class="dropdown" ><a class="dropdown-toggle" href="#" data-toggle="dropdown" ><i class="fa fa-bell"></i> <div id="countnotif" class="label label-danger"><?php echo $notifcnt; ?></div> <i class="fa fa-caret-down"></i> </a> 
                <ul class="dropdown-menu">
                  <?php
                      $mydb->setQuery("SELECT * FROM tblblogpost b,tblstudentnotif s WHERE b.BLOGID=s.BLOGID AND IDNO = '{$IDNO}'");
                      $cur = $mydb->loadResultList();
                      foreach ($cur as $notiflist) {
                        # code...
                        echo '<li><a href="'.web_root.'index.php?q=blog&id='.$notiflist->BLOGID.'" >'.$notiflist->BLOGS.'</a></li>';
                      }
                  ?>
                  <li><a href="<?php echo web_root.'index.php?q=notification'; ?>">See all</a></li>
                </ul>
               </li>  -->
              <?php if(isset($_SESSION['IDNO'])){ 
                    ?>  
                    <?php $student = New Student();
                    $singlestudent = $student->single_students($_SESSION['IDNO']);

                    ?>

                    <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo  $singlestudent->FNAME; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo web_root;?>modstudent/"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> 
                        <li class="divider"></li>
                        <li> <a href="<?php echo web_root; ?>logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a>
                        </li>
                      </ul>
                    </li> 

                    <?php }else{ ?> 
                        <li class="<?php echo ($q=='login') ? 'active' : ''; ?>"><a href="<?php echo web_root.'index.php?q=login'; ?>"> Login</a></li> 
                    <?php } ?>
          </ul>           
        </div><!--/.navbar-collapse -->

   </div><!-- /.nav-collapse --> 
 </div>
 </section>  

 <section id="content"> 
      <?php require_once $content; ?>   
 </section>

 <section id="footer"> 
        <div > 
              <div class="col-lg-4 footer-links">
                   <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="<?php echo web_root;?>">Home</a></li>
                        <li><a href="<?php echo web_root.'index.php?q=events'; ?>">Events</a></li>
                        <li><a href="<?php echo web_root.'index.php?q=announcement'; ?>">Announcement</a></li> 
                    <!--     <li><a href="<?php echo web_root.'index.php?q=about'; ?>">About</a></li>
                        <li><a href="<?php echo web_root.'index.php?q=contact'; ?>">Contact</a></li>  -->
                    </ul>
              </div> 
              <div class="col-lg-4 footer-links">
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                       <?php
                          $sql = "SELECT *,year(`DATEPOSTED`) as 'Yr' FROM `tblblogpost` GROUP BY year(`DATEPOSTED`) ORDER BY `DATEPOSTED` DESC ";
                          $mydb->setQuery($sql);
                          $blog = $mydb->loadResultList();
                          foreach ($blog as $result) {  
                             echo '<li><a href="'.web_root.'index.php?q=archives&year='.$result->Yr.'">'.dateFormat($result->DATEPOSTED,"Y").' Posts</a></li>';
                          }
                          ?> 
                       <!--  <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li> -->
                    </ul>
              </div> 
                 <div class="col-lg-4 footer-links">
                   <h4>Recent Post</h4> 
                    <ul class="s-footer__linklist">
                      <?php
                      $sql = "SELECT * FROM `tblblogpost`  ORDER BY `DATEPOSTED` DESC LIMIT 6";
                      $mydb->setQuery($sql);
                      $blog = $mydb->loadResultList();
                      foreach ($blog as $result) {  
                         echo '<li><a href="'.web_root.'index.php?q=blog&id='.$result->BLOGID.'">'.$result->BLOGS.'</a></li>';
                      }
                      ?> 
                    </ul>
              </div>   
        </div>  
      <footer>
              <p align="left">&copy; School Activity Management System</p>
     </footer>
 </section>
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>jquery/jquery-latest.min.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>  
 

<script type="text/javascript"> 
setInterval(function(){loadnotification()},3000); 
function loadnotification(){

  // alert('asdsa')

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=event",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifevent").html(data); 
             // alert(data);
            
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",   
        url: <?php echo web_root; ?>+"loadnotification.php?type=announcement",                      
        dataType: "text",   //expect html to be returned  
        data:{action:''},               
        success: function(data){                    
          $("#countnotifannouncement").html(data); 
             // alert(data);
            
        }

    });
}
 
          
 

  </script>     

</body>
</html>