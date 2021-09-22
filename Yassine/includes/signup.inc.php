<?php

if (isset($_POST["submit"]))
{
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $remdp = $_POST['remdp'];

    require_once '../includes/config.inc.php';
    require_once '../includes/functions.inc.php';
    if(emptyinputsignup($prenom,$nom,$email,$mdp,$remdp) !== false)
    {
        header("location: ../php/signup.php?error=emptyinputs");
        exit();
    }
    if (invalidemail($email) !== false) {
        header("location: ../php/signup.php?error=invalidemail");
        exit();
    }
    if(emailexist($con, $email) !== false)
    {
        header("location: ../php/signup.php?error=emailtaken");
        exit();
    }
    if(pwdmatch($mdp,$remdp) !== false)
    {
        header("location: ../php/signup.php?error=passwordsdontmatch");
        exit();
    }

    creatuser($con,$prenom,$nom,$email,$mdp); 
}
else
{
    header('location: ../php/acceuil.php');
    // echo"wut?asdfasdfcadsflhasjdfbalsdkhfjbasdlkjchbasdlbchalsdhbcalsdjhcbalsdjhcbasldjhcbasldjhbcasldjbcha";
}