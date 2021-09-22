<?php
session_start();

include("../includes/config.inc.php");
include("../php/functions.inc.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $dates = $_POST['dates'];
    $heure = $_POST['heure'];
    $tables = $_POST['tables'];
    $descriptions = $_POST['descriptions'];

    if (!empty($dates) && !empty($heure) && !empty($tables) && !empty($descriptions)) {

        $query = "INSERT into reservation (dates,heure,tables,descriptions) values ('$dates','$heure','$tables','$descriptions')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    } else {
        echo "Please enter some value information";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/repeatedstyling.css">
    <link rel="stylesheet" href="../css/reservation.css">
</head>

<body class="homebody">
    <header>
        <nav>
            <div class="head">
                <div class="images">
                    <img src="../image/uniimag.png" alt="uniimag.png" class="imguni">
                    <img src="../image/fabimg.png" alt="fabimg.png" class="imgfab">
                </div>
                <div class="logoAccIns">
                    <a href="../php/acceuil.php" title="acceuil"><i class="fas fa-home"></i></a>
                    <a href="../php/logout.php" title="logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Reservation</h1>
        <div class="global">
            <div class="contenu-slide">
                <div class="images"></div>
                <!-- <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">                
                <input type="radio" name="radio-btn" id="radio3">                
                <input type="radio" name="radio-btn" id="radio4"> -->
                <button class="rounded-btn" id="rounded1"></button>
                <button class="rounded-btn" id="rounded2"></button>
                <button class="rounded-btn" id="rounded3"></button>
                <button class="rounded-btn" id="rounded4"></button>
            </div>
            <div class="formulaire">
                <form method="post" autocomplete="off">
                    <div style="display: flex;flex-direction: column;padding: 10px;">
                        <input type="datetime-local" name="dates" required placeholder="date de reservation" id="date-time" min="08:30:00" max="19:00:00">
                        <input type="time" name="heure" min="01:00" max="03:00" placeholder="nombre d'heurs" required>
                        <select name="tables" id="tables" required>
                            <option value="table1">table1</option>
                            <option value="table2">table2</option>
                            <option value="table3">table3</option>
                            <option value="table4">table4</option>
                            <option value="table5">table5</option>
                            <option value="table6">table6</option>
                        </select>
                        <label for="obj">Description</label>
                        <textarea name="descriptions" id="obj" cols="10" rows="10" class="zone-text" required></textarea>
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>