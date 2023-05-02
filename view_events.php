 
<section id="title-header">
    <div class="title">
        <!-- <img src="img/contact.png"> -->
        <p>Events</p>
    </div>
</section> 
 <div class="container">
 	<?php 
 	$sql = "SELECT * FROM `tblblogpost` WHERE CATEGORY='EVENT' ORDER BY `DATEPOSTED` DESC";
		$mydb->setQuery($sql);
		$blog = $mydb->loadResultList();
	foreach ($blog as $result) {  

 // // `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`
	?>
     
     <div class="mg-available-rooms col-lg-12">
                <div class="mg-avl-rooms">
                    <div class="mg-avl-room">
                        <div class="row">
                            <div class="col-sm-2 s-content" >
                                <span class="fa fa-calendar-o" style="font-size: 55px">
                                    <!-- <?php echo date_format(date_create($result->DATEPOSTED),'d M'); ?> -->
                                </span>  
                                  <h5 class="mg-sec-left-title"><?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></h5>
                            </div>
                            <div class="col-sm-10">
                                <div style=" padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                                 <a href="<?php echo web_root ?>index.php?q=blog&id=<?php echo $result->BLOGID; ?>">
                                 <?php echo $result->BLOGS ;?> 
                                 </a>
                                </div> 
                                <div class="row ">
                                    <div class="col-sm-12 contentbody">
                                      <p> <?php echo $result->BLOG_WHAT; ?></p>
                                            <p>on  <?php echo $result->BLOG_WHEN.' @  '.$result->BLOG_WHERE; ?></p> 
                                    </div>
                                
                                    <div class="col-sm-12 f-author">
                                        <p><span class="fa fa-user"></span> Author :  <?php echo  $result->AUTHOR; ?> <br/>
                                            <span class="fa fa-calendar"></span> Posted on  <?php echo  dateFormat($result->DATEPOSTED,"d M Y h:i a"); ?></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
          <?php } ?> 

</div> 
