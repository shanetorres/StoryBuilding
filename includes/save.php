
<?php
//DEFINE ('DB_USER', 'root');
//DEFINE ('DB_PASSWORD', '');
//DEFINE ('DB_HOST', 'localhost');
//DEFINE ('DB_NAME', 'stories');



function setMessage($mytext,$id) {
    $dbc = @mysqli_connect('localhost','root','mysql','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "INSERT INTO Story (storyID, storyText) VALUES('$id','$mytext')";
    if ($dbc->query($q) === true)
    {
        header('Refresh:0');
    }
    else {
        echo "error: " . $q . "<br>" . $dbc->error;
    }
}

function loadStories(){
    $dbc = @mysqli_connect('localhost','root','','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "SELECT * FROM Story";

    $result = $dbc->query($q);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div> <form action=\"\" method=\"post\"><textarea name=\"text\" id=\"storytext\" disabled style=\"resize:none; height: 200; width:400\">" . $row["storyText"] . "</textarea> <br><button name=\"save\" onclick=\"save();\" type=\"submit\" id=\"saveStory\">Save</button> <button onclick=\"edit();\" type=\"button\" id=\"editbutton\">Edit</button> <button type=\"button\" id=\"deleteStory\">Delete</button><input type=\"hidden\" name=\"id\" value=" . $row["storyID"] . "></form></div>";
        }
    }
}

function getNextId(){
    $dbc = @mysqli_connect('localhost','root','mysql','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "SELECT * FROM Story ORDER BY storyID DESC LIMIT 1";

    $result = $dbc->query($q);
    $row = mysqli_fetch_assoc($result);

    return $row["storyID"] + 1;
}

#TODO ITEMS

/*

TODO: To update a story it needs to check if the id exists already in the DB, if it does, $q = "INSERT INTO STORY (storyText) VALUES('$mytext') WHERE storyID = '$id'" or something like that...

TODO: Delete stories functionality

TODO: Make it look fancy

TODO: Add author. should be as simple as a required input in the edit.php that is passed and saved in the setMessage function above. when loaded from loadstories, do not put it as an input but as a <h2> or something so it is not editable.

*/



?>
