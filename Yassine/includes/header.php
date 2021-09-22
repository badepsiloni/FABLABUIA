</php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>FablabUIA</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/inscrire.css">
    <link rel="stylesheet" href="../css/repeatedstyling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<nav>
    <div class="head">
        <div class="images">
            <img src="../image/uniimag.png" alt="uniimag.png" class="imguni">
            <img src="../image/fabimg.png" alt="fabimg.png" class="imgfab">
        </div>
        <div class="logoAccInsloggedout">            
            <?php
                if(isset($_SESSION["Id"]))
                {
                    echo '<a class="logged" href="acceuil.php" title="home">home</a>';
                    echo "<a class='logged' href='../FablabWeb/index.html'>tour</a>";
                    echo "<a class='logged' href='reservation.php'>Reservation</a>";
                    echo "<a class='logged' href='../includes/logout.inc.php'>LogOut</a>";
                }
                ?>
        </div>
        <div class="logoAccInsloggedin">
        <?php
                if(!isset($_SESSION['Id']))
                {
                    echo '<a href="acceuil.php" title="home"><i class="fas fa-home" id="logos"></i></a>';
                    echo "<a href='login.php' title='login'><i class='fas fa-sign-in-alt' id='logos'></i></a>";
                    echo "<a href='signup.php' title='sign up'></i><i class='fas fa-user-plus' id='logos'></i></a>";
                }
            ?>
        </div>
    </div>
</nav>
