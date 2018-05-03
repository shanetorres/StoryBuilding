
<?php

//require("mysqli_connect.php");
function setMessage($mytext,$id) {
    DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'mysql');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'stories');

 $dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "INSERT INTO Story (storyID, storyText) VALUES('$id','$mytext')";
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

function loadStories(){
       DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'mysql');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'stories');

 $dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "SELECT * FROM Story";

    if ($dbc->query($q) === true)
    {
        echo "records selected";
    }
    else {
        echo "error: " . $q . "<br>" . $dbc->error;
    }
}

#WHAT I DID SINCE LAST TIME (change this message if you make changes to help see what you did)

/*made a hidden input named id with the storyId as its value. It increments with each time the create story button is clicked.

On page load it needs to load all the stories from the database, put the storyID from the DB in the hidden field value and the storyText from DB as the value of the textarea as well as set the storyId variable to one more than the highest storyID in the DB. To update a story it needs to check if the id exists already in the DB, if it does, $q = "INSERT INTO STORY (storyText) VALUES('$mytext') WHERE storyID = '$id'" or something like that...

The loadStories function currently does not work at all. call is currently in line 3 of edit.php but maybe move the whole function to script at bottom of edit.php? Idk...


*/



?>
