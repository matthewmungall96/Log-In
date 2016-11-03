<?php

$conn = mysql_connect("localhost","matthewmungall96","");
mysql_select_db("c9");
session_start();

if (false===$conn){
    die("Connection failed");
}

else { 
    echo 'Database Connected';
}

//set up variable to hold sql statement
$sql = "SELECT * FROM users";
$result = mysql_query($sql);
    
echo mysql_num_rows($result);

?>