 <?php 
    $BLOGID = isset($_GET['id']) ? $_GET['id'] :"";
    if ($BLOGID=="") {
      # code...
      redirect("index.php");
    }
   $IDNO = $_SESSION['IDNO'];

   $sql = "DELETE FROM tblstudentnotif WHERE BLOGID ='{$BLOGID}' AND IDNO='{$IDNO}'";
   $mydb->setQuery($sql); 


    $sql = "SELECT * FROM `tblblogpost` WHERE BLOGID='{$BLOGID}'";
    $mydb->setQuery($sql);
    $blog = $mydb->loadSingleResult();
?>
 <section id="title-header">
  <div class="title"> 
      <p><?php  echo strtoupper($blog->BLOGS) //substr( strtoupper($blog->BLOGS), 0,1). substr(strtolower($blog->BLOGS),1);?> </p>
  <h5 class="mg-sec-left-title" style="font-weight: bold;text-align: center;"><?php echo $blog->CATEGORY; ?></h5>
  </div>
</section>
  <div class="container" style="margin-top: 50px;">  
          <div class="col-8">
              <div  class="col-sm-12" style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                <p><?php echo $blog->BLOGS ;?> </p>
              </div>  
                  <div class="col-sm-12" style="min-height: 200px;padding: 10px;">
                    <p><?php echo $blog->BLOG_WHAT; ?> </p>  
                    <p>at <?php echo $blog->BLOG_WHERE; ?> </p> 
                    <p> on <?php echo $blog->BLOG_WHEN; ?> </p> 
                  </div> 
                  <div class="col-sm-12" style="border-top: 1px solid #ddd;padding:10px;">
                      <p><i class="fa fa-user"></i> Author :  <?php echo  $blog->AUTHOR; ?></p> 
                      <p><i class="fa fa-calendar"></i> Posted on :  <?php echo  $blog->DATEPOSTED; ?></p>
                  </div>
          </div>  
  </div>                        