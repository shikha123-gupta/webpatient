<?php session_start();?>
<?php include "header.php";?>
 <div class="app-wrapper">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
      <h1 style="margin-top: 11px;font-size: 24px;margin-bottom: 17px;">Show Staff</h1>

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert" style="border:1px solid white;">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
				      <div class="nav-item">
              
              </div>
						    
						        
							   
						    </div><!--//row-->
						   
					    </div><!--//app-card-body-->
					    
                   
  
  <!-- /.content-header -->
  <!--table data-------------------->
  
    <!-- /.card-header -->
    <div class="table-responsive" style="margin-right: -15px;margin-left: 10px;margin-top: 25px;overflow:auto">
      <table id="example1" class="table table-bordered  ">
        <thead>
          <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
          </tr>
        </thead>
        <?php 
        
        include"dbcon.php";
        $id=$_SESSION['staff_id'];
        $data="select *from staff where id=$id";
        $query=mysqli_query($con,$data);
        $result=mysqli_fetch_array($query);
        ?>
        <tbody>
          <tr>
            <td><?php echo $result['username']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['phone']?></td>
            <td><?php echo $result['role']?></td>
          </tr>
        
      </tfoot>
    </table>
  </div>
</tbody>

  <!-- /.card-body -->
</div>
<!--end table data-------------------->


</div><!--end wrapper -->




				    </div><!--//inner-->
			    </div><!--//app-card-->
      
				    

<?php include "footer.php";?>