
<?php

//require("mysqli_connect.php");
function setMessage($mytext) {
    DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'mysql');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'stories');

 $dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;
    echo($mytext);
    $q = "INSERT INTO Story (storyID, storyText) VALUES('2','$mytext')";
    if ($dbc->query($q) === true)
    {
        echo "new record created";
    }
    else {
        echo "error: " . $q . "<br>" . $dbc->error;
    }
       // $r = mysqli_query($dbc,$q);
   // $insert = mysqli_insert_id($dbc);
}



?>