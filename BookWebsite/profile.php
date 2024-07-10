<?php
require('test.php');
if(isset(($_GET["ID"]))){
    $mm = $_GET['ID'];

    $dbinfo = "SELECT name, name, email FROM users where ID='$mm'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $rt = mysqli_fetch_array($dbresult);

    $name = $rt['name'];
    $email = $rt['email'];


       
        

}
echo $fname;
?>