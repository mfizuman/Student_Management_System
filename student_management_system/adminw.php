<html> 
<?php
session_start();
    if(isset($_POST['save'])){
            $n=$_POST['n'];
            $_SESSION['admin'] = $n;
            echo "<script> window.location.href='includes/admin-page.php'</script>";
    }
?>
<head>
    <script>
        function validateForm() {
            var x = document.getElementById('n').value;
            if (x!="admin") {
                alert("Password Incorrect");
                document.getElementById('n').value="";
                return false;
            }else{
                return true;
            }
        }
    </script>
</head>
<body style="text-align: center; padding: 200px; background-color: whitesmoke;">
    <h2>Admin Login</h2>
    <form method="POST">
      <input type="password" name="n" id='n' placeholder="enter admin password" onblur="return validateForm();"><br><br>
        <input type="submit" name="save">
    </form>
</body>
</html>
