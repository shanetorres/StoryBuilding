<?php
require("includes/save.php");
?>
<html>
<head>
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link title='Roboto' href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div id="header">
    <h1 id = "userTitle">User Stories</h1>
   <!-- <button type="button" id="newStory" onclick="newStory();">Create New Story</button> --><br>
</div>
<body>

    <div id="container">
    <?php $nextId = getNextId();

        echo  "<div> <form action=\"\" method=\"post\"><p>Title</p><input name=\"title\" required><br /><p>Author</p><input name=\"author\" required><br /><br /><textarea name=\"text\" id=\"storytext\" placeholder=\"Create a new story here!\" style=\"resize:none; height: 200; width:400\"></textarea> <br><button name=\"save\" onclick=\"save();\" type=\"submit\" id=\"saveStory\">Save</button> <input type=\"hidden\" name=\"id\" value=" . $nextId . "></form></div>";

        loadStories();

    ?>
    </div>

</body>

<script>

    function edit(){
    	$("button").siblings("textarea").removeAttr("disabled");
    }

    function save(){

    	$("button").siblings("textarea").prop("disabled",true);
    }

</script>
<?php

        if(isset($_POST["save"]))
        {
           $mytext = $_POST["text"];
            $id = $_POST["id"];
            $author = $_POST["author"];
            $title = $_POST["title"];
           setMessage($mytext,$id,$author,$title);

        }else if(isset($_POST["delete"])){
            $id = $_POST["id"];
            deleteMessage($id);
        }

?>
</html>
