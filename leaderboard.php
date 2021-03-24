<?php
/*
 * leaderboard PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    function undefined(){}
    set_error_handler("undefined");
        echo $foo["bar"];
        echo makePageStart("Leaderboard");
        echo makeLogoAndNavBar();
        echo makeHeader();
        echo startMain(); 
        echo validateLogin();
            $username = $_SESSION['username'];
?>
    <div class='mainBox'>
         <div class='inside'>
                <div class="quizResults">
                    <h1>Quiz Leaderboard</h1><br>
                    <h3>Haven't taken the quiz yet?</h3><br>
                    <a href="quiz.php">Take the quiz here</a>
                    <br>
<?php	
    echo leaderboard();
    echo endMain();
    echo makePageEnd();
    echo makeFooter(); 
?>
     
  