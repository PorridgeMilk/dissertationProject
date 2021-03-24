<?php 
/*
 * index PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Fitness.ly");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();
    echo validateLogin();
        $username = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;//username variable
        $username = trim($username);//trim whitespaces
        $password = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;//password variable
        $password = trim($password);//trim whitespaces
        $username = filter_var($username,FILTER_SANITIZE_SPECIAL_CHARS);//sanitize special characters from variable
?>
    <div class="mainBox">
        <div class="inside">
            <h1>Unleash Your <span class="redText">Inner Beast</span>.</h1><br>
            <img src="images/running-2greyscale.jpg" height="100%" width="100%"> <!--Image Source: Wallpapercave (2020) Available at: https://wallpapercave.com/athlete-wallpapers(Accessed: 02 May 2020). -->
            <br>
            <hr>
            <br>     
            <p>Fitness isn't only a sport or hobby. It's a way of life. We here at Fitness.ly actively encourage everyone to stop doing less and start doing more. However, there is always the dilemma of not knowing where to start. We're here to help you to start pursuing your dream and fitness goal now.</p><br>
        </div>
    </div>
<?php 
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>
