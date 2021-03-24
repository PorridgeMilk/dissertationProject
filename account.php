<?php 
/*
 * account PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Account"); //Call function makePageStart
    echo makeLogoAndNavBar(); //Call function  makeLogoAndNavBar
    echo makeHeader(); //Call function makeHeader
    echo startMain(); //Call function startMain
    echo validateLogin(); //Call function validateLogin
    echo '<div class="account">
    <div class="inside">
    <h1>Your Account</h1><br>';
    $username = $_SESSION['username'];//assigns session parameter to variable
    $query = "SELECT * FROM user WHERE username = '$username'"; //SQL Query
    $dbConn = getConnection(); //Call function getConnection
    $queryResult = $dbConn->query($query); 
    while ($rowObj = $queryResult->fetchObject())
        {
            echo "<p>Username : {$rowObj->username}<p>
            <p>Email : {$rowObj->email}</p>";
        }
    echo '<h1>Achievements</h1><br>';
    $achievementQuery = "SELECT imageRef
                        FROM userBadges
                        JOIN user on userBadges.userID = user.userID
                        JOIN badges on userBadges.badgeID = badges.badgeID
                        WHERE username = '$username'"; //SQL SELECT Query
    $queryResult = $dbConn->query($achievementQuery);
    echo "<table class='tableAccount'><tr>";      
    while ($rowObj = $queryResult->fetchObject())
        {
            echo "<td>
            <img class='badgeImg' src='{$rowObj->imageRef}'>
            </td>";
        }
    echo "</tr><tr>"; //Accredible (2020) Available at: https://www.accredible.com/ (Accessed: 02 May 2020).
    $achievementQuery = "SELECT badgeDescription
                        FROM userBadges
                        JOIN user on userBadges.userID = user.userID
                        JOIN badges on userBadges.badgeID = badges.badgeID
                        WHERE username = '$username'"; //SQL SELECT Query
    $queryResult = $dbConn->query($achievementQuery);           
    while ($rowObj = $queryResult->fetchObject())
        {
            echo "<td><p>Description : {$rowObj->badgeDescription}</p></td>";
        }
    echo "</table>
            <br>
            <h2>Quiz Results</h2>
            <br>";
    $quizResultsQuery = "SELECT * 
                         FROM Quiz 
                         WHERE username = '$username'"; //SQL SELECT Query
    $queryResult = $dbConn->query($quizResultsQuery);
    while ($rowObj = $queryResult->fetchObject())
        {
            if(!$quizResultsQuery)
                {
                    echo  "<p>You have not attempted the quiz yet</p><br>";
                }       
            else
                {
                    echo "<p>Your highest score on the quiz is: {$rowObj->quizScore}/20. Last attempt was at: {$rowObj->quizDate}</p><br>";
                }
        }
    echo'<a href="#">Change your password.</a><br><br>
         <a href="deleteUser.php">Delete Your Account</a>
         </div>
         </div>'; 
    echo endMain(); //Call function endMain
    echo makePageEnd(); //Call function makePageEnd
    echo makeFooter(); //Call function makeFooter
?>
    