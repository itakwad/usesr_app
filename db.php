<?php
$con=new mysqli('localhost','root','','users_app');
if(!$con){
    die(mysqli_error($con));
}