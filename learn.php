<?php
/*
 * learn PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Learn");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();
    echo validateLogin();
        if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) 
            {//if statement, session variable exists
                if (isset($_SESSION['username'])) 
                    {//if statement, session variables exist
                        $username = $_SESSION['username'];//assigns session parameter to variable
                        $_SESSION['logged-in'] = true;//session variable is true
                        echo"<div class='mainBox'>
                                <div class='inside'>
                                    <h1>Learn How To Walk Before You <span class='redText'>Fly</span>.</h1><br>
                                    <p>New to health and fitness? No matter how your age, 
                                    you still have the potential to fly, because after all, age is just a number. 
                                    Follow our in-depth e-learning guide in order to improve your knowledge for living an active and healthy lifestyle. 
                                    You can access our guide below.</p>
                                    <br>
                                    <a href='learnMaterialsWelcome.php'>Access our guide here</a>
                                    <img src='images/running-1greyscale.jpg' height='100%' width='100%'>
                                    <br><hr><br>    
                                    <p>After you have completed the guide, you have the opportunity to test your 
                                    knowledge on the topics that were covered in order to see where your level of understanding is at.</p>";
                    }
            }
        else
            {
                echo"<div class='mainBox'>
                        <div class='inside'>
                            <h1>Learn How To Walk Before You <span class='redText'>Fly</span>.</h1><br>
                            <p>New to health and fitness? No matter how your age, you still have the potential to fly, 
                            because after all, age is just a number. Follow our in-depth e-learning guide in order to improve your knowledge 
                            for living an active and healthy lifestyle. You can access our guide below.</p>
                            <br>
                            <a href='login.php'>Log in to start learning</a>
                            <img src='images/running-1greyscale.jpg' height='100%' width='100%'>
                            <br>
                            <p>After you have completed the guide, you have the opportunity to test your knowledge on the topics 
                            that were covered in order to see where your level of understanding is at.</p>
                        </div>
                    </div>"; //Image Source: Gymwear (2020) Available at: https://www.gymwear.co.uk/blogs/news?page=15(Accessed: 02 May 2020).
            }
echo endMain();
echo makePageEnd();
echo makeFooter();
?>