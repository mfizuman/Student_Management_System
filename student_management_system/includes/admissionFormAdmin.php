<?php
    include_once 'admin-header.php';
    include 'database.php';
?>
<html>
    <head>
        <style>
            .containerFormAdmin{
                max-width: 100%;
                float: center;
            }
        </style>
    </head>
    <?php
        if(isset($_REQUEST["id"]) && isset($_REQUEST["del"])){
            $id = $_REQUEST["id"];
            $deleteCon = $_REQUEST["del"];
            if($deleteCon == "delete"){
                $qry = "delete from personal_info where id = $id";
                $result = mysqli_query($conn,$qry   );
            }
        }
    ?>
    <body>
        <div class="containerFormAdmin">
            <div class="table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Fathers Name</th>
                          <th>Fathers Occupation</th>
                          <th>Mothers Name</th>
                          <th>Mothers Occupation</th>
                          <th>Address</th>
                          <th>Birth Date</th>
                          <th>Gender</th>
                          <th>SSC Institute</th>
                          <th>SSC CGPA</th>
                          <th>HSC Institute</th>
                          <th>HSC CGPA</th>
                          <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        $qry = "select * from personal_info";
                        $resultAdmin = mysqli_query($conn,$qry);
                        while($arr = mysqli_fetch_assoc($resultAdmin)){
                    ?>
                    <tr>
                        <td><?php echo $arr["id"];?></td>
                        <td><?php echo $arr["fname"];?></td>
                        <td><?php echo $arr["lname"];?></td>
                        <td><?php echo $arr["email"];?></td>
                        <td><?php echo $arr["faname"];?></td>
                        <td><?php echo $arr["faocu"];?></td>
                        <td><?php echo $arr["moname"];?></td>
                        <td><?php echo $arr["moocu"];?></td>
                        <td><?php echo $arr["addr"];?></td>
                        <td><?php echo $arr["birth"];?></td>
                        <td><?php echo $arr["gender"];?></td>
                        <td><?php echo $arr["sscName"];?></td>
                        <td><?php echo $arr["sscGpa"];?></td>
                        <td><?php echo $arr["hscName"];?></td>
                        <td><?php echo $arr["hscGpa"];?></td>
                        <td><a href="editFormAdmin.php?id=<?php echo $arr["id"]?>">Edit</a></td>
                        <td><a href="admissionFormAdmin.php?id=<?php echo $arr["id"]?>&del=delete">Delete</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </body>
</html>