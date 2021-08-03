<?php
$con = mysqli_connect('localhost','root', '','contact');

if($con){
    echo "Connection Successfull";
    }
else{
    echo "No Connection";
}

mysqli_select_db($con, 'contact');

$First = $_POST['First'];
$Last = $_POST['Last'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comment = $_POST['Comment'];

$query = " insert into userinfo (First, Last, Email, Mobile, Comment)
values ('$First', '$Last', '$Email', '$Mobile', '$Comment')";

mysqli_query($con, $query);


?>
