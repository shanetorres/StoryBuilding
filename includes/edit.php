<?php
require("save.php");
?>
<html>
<head>
    <link rel="stylesheet" href="../css/stylesheet.css" />
    <link title='Roboto' href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div id="header">
    <h1 id = "userTitle">User Stories</h1>
    <Button type="button" id="newStory" onclick="newStory();">Create New Story</Button> <br>
</div>
<body></body>

<script>

    var storyId = 1;

    function newStory(){
        $(document).ready(function() {  
  var test = {  
    id: "div",  
    class: "divclass",  
    css: {  
      "color": "Green"  
    }  
  };  
  var $div = $("<div>", test);  
  $div.html(" <form action=\"\" method=\"post\"><textarea name=\"text\" id=\"storytext\" disabled style=\"resize:none; height: 200; width:400\"></textarea> <br><button name=\"save\" onclick=\"save();\" type=\"submit\" id=\"saveStory\">Save</button> <button onclick=\"edit();\" type=\"button\" id=\"editbutton\">Edit</button> <button type=\"button\" id=\"deleteStory\">Delete</button><input type=\"hidden\" name=\"id\" value="+storyId+"></form>");
  $("body").append($div);
            storyId++;
});  
    }


    function edit(){
    	$("button").siblings("textarea").removeAttr("disabled");
    }

    function save(){
        
    	$("button").siblings("textarea").prop("disabled",true);
    }
</script>
<?php
        if(!empty($_POST["text"]))
        {
           $mytext = $_POST["text"];
            $id = $_POST["id"];
           setMessage($mytext,$id);

        }

?>
</html>
