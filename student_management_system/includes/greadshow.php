<?php
include_once( 'database.php' );
include_once 'headerInside.php';
$sid=$_REQUEST["stdid"] ;
$id = $sid;
include_once 'sidebar.php';
?>
<head>
    <link rel="stylesheet" href="../css/header.css">
</head>
<div class="container">
<table class="table table-hover">
    <thead>
    <tr>
        <td>Id</td>
        <td>Subject Name</td>
        <td>GPA</td>
        <td>GRADE</td>
    </tr>
    </thead>
    <tbody>
        
        <?php
        $query   = "SELECT name FROM a where id= $sid";
        $result  = mysqli_query( $conn, $query );
        $name= mysqli_fetch_assoc( $result )
        ?>
    <h1>This routine is for    <?php echo $name['name']?></h1>
	<?php 
        
	$query   = "SELECT * FROM gradedetails where id= $sid";
	$result  = mysqli_query( $conn, $query );

	while( $student = mysqli_fetch_assoc( $result ) ) {
		?>


        <tr>
          
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['subjectname']; ?></td>
            <td><?php echo $student['gpa']; ?></td>
            <td><?php echo $student['grade']; ?></td>


        </tr>
		<?php
	}
	?>

    </tbody>

</table>
</div>