<?php 
/*
 * about PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
?>
<?php 
    echo makePageStart("About"); //Call function makePageStart
    echo makeLogoAndNavBar(); //Call function  makeLogoAndNavBar
    echo makeHeader(); //Call function makeHeader
    echo startMain(); //Call function startMain
    echo validateLogin(); //Call function validateLogin
?>
    <div class="mainBox">
        <div class="inside">
        <h1>Fitness.ly: About Us</h1><br>
            <p>Fitness.ly is an e-learning website that promises users the fundamental knowledge and skills in order to live a healthy lifestyle. Our aims are:</p><br><hr><br>   
            <div class="aboutUl">
                <ul>
                    <li>To provide an in-depth learning guide suitable for all users.</li>
                    <li>To entertain users by providing competitive elements (Quizzes), as well as rewards (Badges).</li>
                    <li>To ensure that it is possible for <span class="redText">everyone</span> to learn how to live and eat healthy.</li>
                    <li>Providing a TDEE and BMI calculator to help you start your journey towards a better health.</li>
                </ul>
            </div>
        <br>
        <hr>
        <br>
            <p>Creator: Richie Liu, w17020293</p>
        </div>
    </div>            
<?php
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>
   
          
      
      
  