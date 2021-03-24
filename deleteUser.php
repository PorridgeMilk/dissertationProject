<?php
/*
 * deleteUser PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Delete Account"); //Call function makePageStart
    echo makeLogoAndNavBar(); //Call function  makeLogoAndNavBar
    echo makeHeader(); //Call function makeHeader
    echo startMain(); //Call function startMain
    echo validateLogin(); //Call function validateLogin
?>
    <div class="form">
        <div class="inside">
            <h1>Deletion of User Account</h1>
            <h3>Enter your details in order to delete your account</h3>
            <br>
            <p>Warning: If you delete your account, your saved progress and achievements will be erased</p>
            <br>
                <form action="deleteUserProcess.php" method="post"> 
                    <label for="email">Email Address<span class="req">*</span></label>
                    <input type="email" placeholder="Email" name="email" required>
                    <label for="password">Password<span class="req">*</span></label>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" class="submit" value="Confirm Details">
                </form>
         </div>
    </div>       
<?php 
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>
   
          
      
      