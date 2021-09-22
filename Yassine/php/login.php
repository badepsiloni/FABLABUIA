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
    else if($_GET["error"] == "wrongloging")
    {
        $error = "incorrect loging informations!";
    }
}
 ?> 
<html>
<body style="background-image: url(../image/fab2.JPG);">
    <form action ="../includes/login.inc.php" method="post" autocomplete="off">
        <div class="boxlog">
            <div class = "contenu" style="display: flex; flex-direction: column; padding-bottom: 5px;">
                <h3>login</h3>
                <?php if(isset($error)) { ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
            <?php } ?> 
                <input type="text" placeholder="email" required name="email">
                <input type="password" placeholder="password" required name="mdp">
                <button type="submit" name="submit">Log in</button>
            </div>
            
        </div>
    </form>
    <footer class="foot">
        <div class="sociallogo">
            <a  target="_blank" href="https://www.facebook.com/Fablab-universiapolis-112455204432836"  style="color: blue;"><i class="fab fa-facebook-f fa-3x"></i></a>
            <a target="_blank" href="" style="color: cornflowerblue;"><i class="fab fa-twitter fa-3x"></i></a>
            <a target="_blank" href="https://www.instagram.com/fablab_universiapolis/" style="color: rgb(157, 91, 170);"><i class="fab fa-instagram fa-3x"></i></a>
            <a target="_blank" href="https://mail.google.com/mail/u/0/?tab=wm#inbox/FMfcgzGkZGgXndMWzdXVmSXcrqFHJcQh?compose=NZVHGDkxmRTPQTXQQGWqdkpZxXdVqNPTmFPcxBHCCWZPztzlfsqQTqwkTNbrhgnLnVKSwL" style="color: whitesmoke;"><i class="fas fa-envelope fa-3x"></i></a>    
        </div>
      </footer> 
</body>

</html> 