<!DOCTYPE html>
<html>
<head>

    <title>Includes Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css?version=1" media="screen" />
    <link title='Roboto' href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- UIkit CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" /> -->

    <!-- UIkit JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script> -->

</head>
    <body>
        <button class="uk-button uk-button-primary">Primary</button>
        <div id="container">

        <?php
            include ('includes/header.html');
            include ('includes/nav.html');
            include ('includes/content.html');
        ?>

        </div>

    </body>
</html>
