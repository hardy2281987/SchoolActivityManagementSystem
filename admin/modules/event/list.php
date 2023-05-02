<?php
	if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

?>

 <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">List of Events <small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small></h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th width="5%">#</th>
				  		 <th>Title</th>
				  		<th>Body</th>
				  		<th>When</th> 
				  		<th>Location</th>
				  	 	<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php   
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `tblevent`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td width="5%" align="center"></td>';
				  		// echo '<td>' . $result->EVENTID.'</a></td>';
				  		echo '<td>'. $result->EVENT_TEXT.'</td>';
				  		echo '<td>'. $result->EVENT_WHAT.'</td>';
				  		echo '<td>'. $result->EVENT_WHEN.'</td>';
				  		echo '<td>'. $result->EVENT_WHERE.'</td>';

				  	  
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->EVENTID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->EVENTID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	 