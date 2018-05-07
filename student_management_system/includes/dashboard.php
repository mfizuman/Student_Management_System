<?php
include_once 'headerInside.php';
$id = $_REQUEST['stdid'];

//print_r($_SESSION);
?>
<link rel="stylesheet" href="../css/header.css">
<header style="background-color: #f4f4f4;">
    <div class="container" id="head">
    <h1>Welcome to DashBoard</h1>
    </div>
</header>
<body>
    <div class="area" style="padding: 4%;">
        <?php include_once 'stdInfo.php';$stdId=$id?>
        
    </div>
    <?php include_once 'sidebar.php';?>
</body>
