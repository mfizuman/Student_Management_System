<?php
include_once'database.php';
include_once 'admin-header.php';

     if(isset($_REQUEST['id']))
     {
	     $studentid = $_REQUEST['id'];
	     $query = "SELECT * FROM gradedetails WHERE id = $studentid";
	     $result = mysqli_query($conn,$query);
	     $student = mysqli_fetch_assoc($result);
	     $subname = $student['subjectname'];
	     $gpa = $student['gpa'];
	     $grade = $student['grade'];

     }
     else
     {
	     $subname ='' ;
	     $gpa = '';
	     $grade = '';

     }


if(isset($_REQUEST['save']))
{
	$id = $_POST['id'];
	$subname = $_POST['sname'];
	$gpa = $_POST['gpa'];
	$grade = $_POST['grade'];

	$query = "UPDATE gradedetails SET subjectname = '$subname', gpa = $gpa , grade='$grade'  WHERE id=$id";
	$last = mysqli_query($conn,$query);

	if($last)
	{
		echo "<script>window.location='gradeform.php'</script>";
	}
	else
	{
		echo "Something went wrong";
	}
}

?>


<div class="container">
	<form method="post">
		<input type="" name="id" value="<?php echo $studentid?>">

		<div class="row">
			<div class='col-lg-6'>
				<label> Subject name : </label>
				<input type="text" class="form-control" id="sname" name="sname" value="<?php echo $subname; ?>">
			</div>
			<div class='col-lg-6'>
				<label> GPA  : </label>
				<input type="number" class="form-control" id="gpa" name="gpa" value="<?php echo $gpa ;?>">
			</div>
			<div class='col-lg-6'>
				<label> Grade :</label>
				<input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade?>">
			</div>
			<div class='col-lg-6'>
				<input type="submit" id="save"  name="save"  class="btn btn-info center" value="update" ">
			</div>
		</div>
	</form>
</div>
