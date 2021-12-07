<?php 
include_once("connection.php");



include_once("master.php");

?>
<div id="page-wrapper">
    <div id="page-inner">
		
		
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
				<div class="panel-heading">
                    View Applicants
                </div>
				<div class="panel-body">
<?php	
/* if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	
	if($msg=='true')
	{
		echo '<div class="alert alert-success">
				<strong>Record Deleted Successfully!</strong>
			</div>';
	}
} */
?>
	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<th>#</th>	
	<th>Name</th>
	<th>Applied Post</th>
	<th>Mobile No </th>
	<th>Email Id</th>
	<th>Send At</th>
	<th>Action</th>
	</thead>
	<tbody>
<?php
$cnt=1;
$sql=@mysqli_query($con,"SELECT * FROM students") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id=$row['id']; $cv_resume=$row['cv_resume'];
?>
<tr>
<td><?php echo $cnt; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['applied_post']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['send_at']; ?></td>
<td><?php echo '<a href="../applicants/'.$cv_resume.'" style="color:white;" > ';?>
	<button class="btn btn-info " title="Resume Or CV"><i class="fa fa-file"></i></button></a>
	<?php echo '<a href="delete_student_record.php?ugid='.$id.'" style="color:white;" > ';?>
	<button class="btn btn-danger "  title="Delete"><i class="fa fa-times"></i></button></a>
</td> 
</tr>
<?php
$cnt++;
}

?>
	</tbody>
	</table>
				</div>		
				</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
	

<?php include_once("footer.php");?>