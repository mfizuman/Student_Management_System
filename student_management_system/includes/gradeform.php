<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
include_once 'database.php';
include_once 'admin-header.php';
$count = 1;
if(isset($_POST['save'])){
    $id=$_POST['stdid'];
    $subname=$_POST['sub'];
    $gpa=$_POST['gpa'];
    $grade=$_POST['grade'];
    $q="select * from gradedetails where id=$id and subjectname='$subname'";
    $r = mysqli_query($conn,$q);
    $l = mysqli_fetch_assoc($r);
    if(count($l)<=0){
        $query="INSERT INTO gradedetails(subjectname,gpa,grade,id) VALUES ('$subname',$gpa,'$grade',$id)";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "";
        }
        else{
            echo " problem";
        }
    }

}
if(isset($_REQUEST['act']) && $_REQUEST['act']='del'){
    $id= $_REQUEST['id'];
    $subject= $_REQUEST['subject'];
    $query= "DELETE FROM gradedetails WHERE id =$id and subjectname='$subject'";
    $rec = mysqli_query($conn,$query);
    if($rec){
        echo"<script>window.location='gradeform.php'</script>";
    }
    else{
        echo"problem";
    }
}
?>
<div class="container">
    <form method="post">
        <div class="row">
            <div class='col-lg-6'>
                <label> Student Id :</label>
                <div>
                    <select id="stdid" name="stdid">
                        <?php
                        $query = "SELECT id, name FROM a";
                        $result = mysqli_query($conn,$query);
                        while($student= mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $student['id']; ?>"><?php echo $student['name']; ?></option>;
                                <?php
                        }
                        ?>
                </select>
                </div>
            </div>


            <div class='col-lg-6'>
            <label> Subject Tittle : </label> 
              <select id="sub" name="sub">
                        <option value="">--subjects--</option>;
                </select>

            </div>
            <div class='col-lg-6'>
                <label> GPA  : </label> <input type="number" step="0.01" class="form-control" id="gpa" name="gpa">
            </div>
            <div class='col-lg-6'>
                <label> Grade :</label> <input type="text" class="form-control" id="grade" name="grade">
            </div>
            <div class='col-lg-6'>
                <input type="submit" id="save"  name="save"  class="btn btn-info center" onclick="validation()">
            </div>
        </div>
    </form>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Name</td>
            <td>Subject Name</td>
            <td>GPA</td>
            <td>GRADE</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
		<?php
		$query   = "SELECT a.name, gradedetails.id,gradedetails.subjectname,gradedetails.gpa,gradedetails.grade FROM gradedetails INNER JOIN a ON gradedetails.id=a.id";
		$result  = mysqli_query( $conn, $query );

		while( $student = mysqli_fetch_assoc( $result ) ) {
			?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['subjectname']; ?></td>
                <td><?php echo $student['gpa']; ?></td>
                <td><?php echo $student['grade']; ?></td>
                <td><a href="admin_gradeshow.php ?id=<?php echo $student['id']?>">Edit</a></td>
                <td><a href="gradeform.php?id=<?php echo $student['id']?>&act=del&subject=<?php echo $student['subjectname'] ?>">DELETE</a></td>
            </tr>
			<?php
		}
		?>
        </tbody>
    </table>
</div>
<script>
    function validation(){
        var subname = document.getElementById('sname').value;
        var gpa = document.getElementById('gpa').value;
        var grade = document.getElementById('grade').value;
        if (subname==""){
            alert("subname is must");
            return false;
        }
        if (gpa==""){
            alert("gpa is must");
            return false;
        }
        if (grade==""){
            alert("grade is must");
            return false;
        }
    }
</script>
<script>
$(document).ready(function(){
	$("#stdid").change(function(){
		$cid= $(this).val();
		$.ajax({
			type: "POST",
			url: 'functions.php',
			data: 'cid='+$cid,
			success: function(data){
				//alert(data);
				$("#sub").html(data);
			}
		});
	});

});
</script>










