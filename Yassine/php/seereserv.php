<?php
session_start();

include("../includes/config.inc.php");
include("../php/functions.inc.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Choix</title>
</head>

<body>
    <style>
        .all {
            border: 10px solid;
            text-align: center;
            width: 70%;
            border-radius: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            background-color: rgb(228, 247, 247);
        }
        h2{
            color: blue;
        }
    </style>
    <div class="all">

        <h2>Veillez valider votre choix</h2>
        <div>
            <h3>Vous Confirmer la date <?php echo $user_data['dates']; ?> </h3>
        </div>
    </div>
</body>

</html>