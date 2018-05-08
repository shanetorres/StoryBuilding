
<?php
//DEFINE ('DB_USER', 'root');
//DEFINE ('DB_PASSWORD', '');
//DEFINE ('DB_HOST', 'localhost');
//DEFINE ('DB_NAME', 'stories');



function setMessage($mytext,$id,$author,$title) {
    $dbc = @mysqli_connect('localhost','root','','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;
    $idFound = false;
    $s = "SELECT * FROM Story";
    $r = $dbc->query($s);
    if (mysqli_num_rows($r) > 0){
        while ($row = mysqli_fetch_assoc($r)){
            if ($row["storyID"] === $id){
                $q = "UPDATE Story SET storyText='$mytext' WHERE storyID=$id";
                $idFound = true;
                break;
            }
        }
    }

    if(!$idFound){
        $q = "INSERT INTO Story (storyID, storyText, storyAuthor, storyTitle) VALUES('$id','$mytext', '$author', '$title')";
    }

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
            echo "<div><h2>" . $row["storyTitle"] . "</h2><h4> By: ". $row["storyAuthor"] . "</h4><form action=\"\" method=\"post\"><textarea name=\"text\" id=\"storytext\" disabled style=\"resize:none; height: 200; width:400\">" . $row["storyText"] . "</textarea> <br><button name=\"save\" onclick=\"save();\" type=\"submit\" id=\"saveStory\">Save</button> <button onclick=\"edit();\" type=\"button\" id=\"editbutton\">Edit</button> <button type=\"submit\" name=\"delete\" id=\"delete\">Delete</button><input type=\"hidden\" name=\"id\" value=" . $row["storyID"] . "></form></div>";
        }
    }
}

function getNextId(){
    $dbc = @mysqli_connect('localhost','root','','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "SELECT * FROM Story ORDER BY storyID DESC LIMIT 1";

    $result = $dbc->query($q);
    $row = mysqli_fetch_assoc($result);

    return $row["storyID"] + 1;
}


function deleteMessage($id){
    $dbc = @mysqli_connect('localhost','root','','stories')
OR die ('Could not connect to MySQL: ' . mysqli_connect_error()) ;

    $q = "DELETE FROM Story WHERE storyID = $id";

    if ($dbc->query($q) === true)
    {
        header('Refresh:0');
    }
    else {
        echo "error: " . $q . "<br>" . $dbc->error;
    }


}



?>
