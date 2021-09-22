<?php

if(isset($_POST["submit"]))
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    require_once '../includes/config.inc.php';
    require_once '../includes/functions.inc.php';

    if(emptyinputlogin($email,$mdp) !== false)
    {
        header("location: ../php/login.php?error=emptyinputs");
        exit();
    }
    loginuser($con,$email,$mdp);
}
else
{
    header('location: ../php/acceuil.php');
    exit();
}
