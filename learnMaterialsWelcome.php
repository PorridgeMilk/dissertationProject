<?php
/*
 * learnMaterialsWelcome PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Learn - Welcome");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();
    echo validateLogin();
    echo "
        <div class='learnContainer'>
            <div class='inside'>
                <section class='learning'>
                    <div class='tabs'>
                        <a class='active' href='learnMaterialsWelcome.php'>Welcome</a>
                        <a href='learnMaterialsSection1.php'>Section 1: Exercising</a>
                        <a href='learnMaterialsSection2.php'>Section 2: Healthy Eating</a>
                    </div>     
                    <h1>Welcome To The Course!</h1>
                    <br>
                    <p>Congratulations! You've taken the first step in becoming a better you, and we admire that.</p>
                    <hr>
                    <br>
                    <h1>Advisory Information</h1>
                    <br>
                    <p>This is an e-learning guide which explains basic fundamental knowledge to exercising and eating healthy.</p>
                    <br>
                    <hr>
                    <br>
                    <h2>Injuries</h2>
                    <br>
                    <p>Consult your Doctor or Physiotherapist if you have an underlying injury or medical condition before you continue reading this guide.</p>
                    <br>
                    <hr>
                    <br>
                    <h2>BMI Calculator</h2>
                    <br>
                    <p>Although not required, we recommend you use our <a href='tdee.php'>TDEE Calculator</a> 
                    prior to reading this guide, which contains information on your BMI (Body Mass Index), before continuing this guide.</p>
                    <br>
                </section>
                <section class='learning'>
                    <br>
                    <h1>Ready to Learn?</h1>
                    <br>
                    <p>Start your learning by selecting Section 1</p>
                    <br>
                    <form action='learnMaterialsSection1.php'>
                        <input class='submit' type='submit' value='Section 1: Exercising'>
                    </form>
                </section>
            </div>
        </div>";
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>