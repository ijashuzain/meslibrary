<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "lib_db";

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$con){
	die('<br>
    <div style="padding: 10px; margin: auto; width: 90%;" class="container bg-white shadow">
      <div style="padding: 10px;" class="container text-center">
        <h6 class="heading">Something Went Wrong!!!</h6>
      </div>
    </div><br>'.mysqli_connect_error());
}else{
	echo '';
}
?>