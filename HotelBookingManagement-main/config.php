<?php
/*
This fille contains database configuration assuming you are running mysql using
user "root" and password ""
*/



//Trying to conne ct to database
$conn = mysqli_connect("127.0.0.1", "root", "", "Hotel Management");

//Check the connection
if($conn==false){
    echo ('Error: Cannot connect');
}
?>