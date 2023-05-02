<?php
		check_message(); 
		?> 
		 
  <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">List of Student <small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small></h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>#</th>
				  		<th  width="50"><!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> -->  Id</th>
				  		 <!-- <th>PICTURE</th> -->
				  		  <th>Name</th>
				  		 <!-- <th>LASTNAME</th> -->
				  		 <!-- <th>CITYADDRESS</th> -->
				  		 <th>Course</th>
				  		<th>Department</th>  
				  		<th>Contact#</th> 
				  		<th width="10%">Action</th> 
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblstudent` s, tblcourse c,tbldepartment d WHERE  s.COURSE=c.COURSEID AND   s.DEPARTMENT=d.DEPARTMENTID";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="5%" align="center"></td>';
				  		// echo '<td  width="13%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
				  			echo '<td  width="13%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
				  		// echo '<td ><a href="index.php?view=view&id="><img src="'. $result->image.'" width="60" height="60" title="'.$result->LNAME.'"/></a></td>';
				  		echo '<td>'. $result->FNAME.' ' . $result->LNAME .'</td>';
				  		// echo '<td>'. $result->LASTNAME.'</td>';
				  		// echo '<td>'. $result->CITYADDRESS.'</td>'; 
				  		echo '<td>'.$result->DESCRIPTION . '(' . $result->COURSE.')</td>'; 
				  		echo '<td>'. $result->DEPARTMENT.'</td>';  
				  		echo '<td>'. $result->PHONE.'</td>';
				  		echo '<td  width="10%" > <a title="Edit" href="index.php?view=edit&id='.$result->IDNO.'" class="btn btn-primary btn-xs" ><i class="fa fa-pencil fa-fw"></i></a>
				  					<a title="View Inormation" href="index.php?view=view&id='.$result->IDNO.'" class="btn btn-success btn-xs "><i class="fa fa-info fa-fw"></i></a></td>';
				  		// echo '<td  width="10%" ><a title="View Inormation" href="index.php?view=view&id='.$result->IDNO.'" class="btn btn-success btn-xs "><i class="fa fa-info fa-fw"></i></a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				 	
				</table>
				<div class="btn-group">
				<!--   <a href="index.php?view=add" class="btn btn-default">New</a> -->
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				</form> 