<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Date Time </title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lobster');  
        body {
            background-image: url('<?php $timeOfDay = date("H:i:a"); 
            if( $timeOfDay >= '06:00'and $timeOfDay < '12:00'){
                echo 'images/morning.png';
            } else if ($timeOfDay >= '12:00'and $timeOfDay < '18:00'){
                echo 'images/afternoon.png';
            }else if ($timeOfDay >= '18:00'and $timeOfDay < '00:00'){
                echo 'images/evening.png';
            }else if ($timeOfDay >= '00:00'and $timeOfDay < '06:00'){
                echo 'images/night.png';
            }
            ?>');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-family: Lobster;  
        }
    </style>
</head>