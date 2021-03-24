<?php 
/*
 * logout PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Log Out");
    echo makeNavBarWithoutAccount();
    echo makeHeader();
    echo startMain();   
        if (isset($_SESSION['username'])) 
            {
                session_destroy(); //Destroy SESSION variables
                echo "<div class='form'>
                        <div class='inside'>
                            <form method='post' action='index.php'>
                                <h1>Logged Out</h1>
                                <input class='submit' type='submit' value='Back to Home'>
                            </form>
                        </div>
                    </div>";
            }
        else
            {
    
                echo"<div class='form'>
                        <div class='inside'>
                            <form method='post' action='index.php'>
                                <h1>Logged Out</h1>
                                <input class='submit' type='submit' value='Back to Home'>
                            </form>
                        </div>
                    </div>";
            } 
    echo endMain();   
    echo makePageEnd();
    echo makeFooter();
?>
