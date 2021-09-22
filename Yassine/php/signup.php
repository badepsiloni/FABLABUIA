<?php
session_start();

include("../includes/config.inc.php");
include("../includes/functions.inc.php");
include("../includes/header.php");


if(isset($_GET["error"])) 
{ 
    if($_GET["error"] == "emptyinputs")
    {
        $error = "fill in all fields!";
    }
    else if($_GET["error"] == "invalidemail")
    {
        $error = "chose a proper email!";
    }
    else if($_GET["error"] == "emailtaken")
    {
        $error = "email already taken.";
    }
    else if($_GET["error"] == "passwordsdontmatch")
    {
        $error = "passwords doesn't match!";
    }
    else if($_GET["error"] == "statmentfaild")
    {
        $error = "your request has been cancelled!";
    }
}
// $error = "batata";

?>  
<html>
<body style="background-image: url(../image/fab2.JPG);">
    <div class="boxsign">
        <div class="contenu">
            <h3>sign up</h3>


            <form  action="/includes/signup.inc.php" method="post" autocomplete="off">
                <div style="display: flex;flex-direction: column; width: 60%;margin:auto;padding: 10px;">

                    <input type="text" placeholder="name" name="prenom" required>
                    <input type="text" placeholder="family name" name="nom" required>
                    <select id=" profession_select" style="margin:5px">
                        <option value=""> your profession</option>
                        <option value="1">first year student</option>
                        <option value="2">second year student</option>
                        <option value="3">3th year student</option>
                        <option value="4">4th year student</option>
                        <option value="5">5th year student</option>
                        <option value="professeur">professor</option>
                    </select>
                    <input type="email" placeholder="email" name="email" required>
                    <input type="password" placeholder="password" name="mdp" required>
                    <input type="password" placeholder="Confirm pass" name="remdp" required>
                        <?php if(isset($error)){?>
                    <div class="error">
                        <?php echo $error;?>
                    </div>
                    <?php } ?>
                    <!-- <i class="fas fa-check"></i><input type="submit" value=" confirmation"><br><br> -->
                    <!-- <a href="" class="submit_btn" style="color: black; background-color: cornsilk;">confirmer</a> -->
                    <button type="submit" name="submit">Sign up</button>
                </div>
            </form>
        </div>
    </div>

    </div>
    <footer class="foot">
        <div class="sociallogo">
            <a target="_blank" href="https://www.facebook.com/Fablab-universiapolis-112455204432836" style="color: blue;"><i class="fab fa-facebook-f fa-3x"></i></a>
            <a target="_blank" href="" style="color: cornflowerblue;"><i class="fab fa-twitter fa-3x"></i></a>
            <a target="_blank" href="https://www.instagram.com/fablab_universiapolis/" style="color: rgb(157, 91, 170);"><i class="fab fa-instagram fa-3x"></i></a>
            <a target="_blank" href="https://mail.google.com/mail/u/0/?tab=wm#inbox/FMfcgzGkZGgXndMWzdXVmSXcrqFHJcQh?compose=NZVHGDkxmRTPQTXQQGWqdkpZxXdVqNPTmFPcxBHCCWZPztzlfsqQTqwkTNbrhgnLnVKSwL" style="color: whitesmoke;"><i class="fas fa-envelope fa-3x"></i></a>
        </div>
    </footer>
</body>

</html>