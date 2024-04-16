<?php

$thankYou= "WOW, a new members !";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you seriously registered ?</title>
     <!-- /BOOTSTRAP -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-background {
        background: linear-gradient(45deg, #FF5733, #FFC300); /* Gradient colori: arancione e giallo */
        width: 100vw;
        height: 100vh;
        }
        .center-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index:2;
            text-align:center;
        }
    </style>
</head>
<body class="gradient-background">
    <div class="container center-container">    
        <h1 class="text-white "> 
            <?=$thankYou?> 
        </h1>
        <p class="text-white">Thank you !!</p>
    </div>
</body>
</html>