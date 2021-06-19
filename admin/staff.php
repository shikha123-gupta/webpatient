<?php include "header.php";?>
 <div class="app-wrapper">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
      <h1 style="margin-top: 11px;font-size: 24px;margin-bottom: 17px;">Add Staff,Doctor,Admin</h1>

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert" style="border:1px solid white;">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
				      <div class="nav-item">
                <button class="btn"style="color:#ab47bc;background-color: #f3f1f1;border-bottom: 2px solid #e91e63;width: 144px;height: 44px;margin-top: -20px;margin-right: -40px;float: right;font-size:16px;font-weight: 600;"data-toggle="modal" data-target="#addblog">+ Add Staff</button>
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
            <th>Sr No.</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Role</th>
          </tr>
        </thead>
        <?php 
        $i=1;
        include"dbcon.php";
        $data="select *from staff";
        $query=mysqli_query($con,$data);
        while($result=mysqli_fetch_array($query)){
        ?>
        <tbody>
          <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $result['username']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['password']?></td>
            <td><?php echo $result['phone']?></td>
            <td><?php echo $result['role']?></td>
              
            
            <!-- <td>
              <a href="dashboard_view.php?id=<?php echo $result['emp_id'] ?>" class="btn btn-sm btn-outline-danger" style="font-weight:600;">View</a>
              <a href="dashboard_edit.php?id=<?php echo $result['emp_id'] ?>" class="btn btn-sm btn-outline-danger" style="font-weight:600;">Edit</a>
              <a href="dashboard_delete.php?id=<?php echo $result['emp_id'] ?>" class="btn btn-sm btn-outline-danger" style="font-weight:600;">Delete</a>
            </td> -->
          </tr>
        <?php } ?>
      </tfoot>
    </table>
  </div>
</tbody>

  <!-- /.card-body -->
</div>
<!--end table data-------------------->
<!-- start modal------------------------->
<style>
 
        .form-control{
          width: 100%;
            margin-top: 6px;
            border-radius: 20px;
            height: 40px;
            background: linear-gradient(to right,#fdf7f7,#eae7e7);
        }
        label{
          margin-left: 13px;
            font-size: 16px;
            font-weight: 600;
        }
        .btn1{
          font-size:16px;
          font-weight:600;
          background:#ec407a;
            width: 100%;
            border-radius: 4px;
            color:white;
            border-radius: 20px;
        }


</style>
<div class="modal fade" id="addblog" tabindex="-1" role="dialog" aria-labelledby="AddCategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background:#5f9bb9;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Create Staff,Admin,Doctor</h5><hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#fafafa;">
        <form method="post" action="staff_insert.php" enctype="multipart/form-data">
                 <div class="form-group">
                            <label>Username :</label>
                            <input type="text" name="username" placeholder="Enter employee name" class="form-control">
                          </div><br>
                          <div class="form-group">
                            <label>Email :</label>
                            <input type="text" name="email" placeholder="Enter employee age" class="form-control">
                          </div><br>
                          <div class="form-group">
                            <label>Password:</label>
                            <input type="text" name="password" placeholder="Enter employee age" class="form-control">
                          </div><br>
                          <div class="form-group">
                            <label>Phone Number :</label>
                            <input type="text" name="phone" placeholder="Enter employee age" class="form-control">
                          </div><br>
                          <div class="form-group">
                            <label>Role :</label>
                              <select name="role"  class="form-control">
                               <option>select</option>
                               <option>Staff</option>
                               <option>Admin</option>
                               <option>Doctor</option>
                            </select>
                          </div><br>
                          <center><input type="submit" name=""value="SUBMIT" class="btn btn1 form-control"></center>

        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end modal-------------------------->
</div><!--end wrapper -->




				    </div><!--//inner-->
			    </div><!--//app-card-->
      
				    

<?php include "footer.php";?>