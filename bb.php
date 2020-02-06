<?php
    $dd = $_GET['p1'];
    $rr = "upload/".$_GET['p1'];
    $cat = $_GET['p2'];
    $db_name = "nadar";
    $mysql_username = "root";
    $mysql_password = "";
    $server_name = "localhost";
    $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
    $sql = "SELECT * FROM $cat where image = '$dd'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $ew = $row['item_name'];
    if ($row){
        $sql = "DELETE FROM $cat where image = '$dd'";
        $result = mysqli_query($conn,$sql);
        if ($result){
            unlink($rr);
            echo "<script type='text/javascript'>alert('Successfully deleted $ew');</script>";
            header("refresh:0;url=deletion.php?p1=$cat");
        }
    }
    
?>
