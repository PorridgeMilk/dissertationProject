<?php
/*
 * signupFunctionality PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Sign Up");
    echo makeNavBarWithoutAccount();
    echo makeHeader();
    echo startMain(); 
    $newuser = filter_has_var(INPUT_POST, 'newuser') ? $_POST['newuser'] : null;
    $newuser = trim($newuser);
    $newpass = filter_has_var(INPUT_POST, 'newpass') ? $_POST['newpass'] : null;
    $newpass = trim($newpass);
    $newuser = filter_var($newuser,FILTER_SANITIZE_SPECIAL_CHARS);
    $newemail = filter_has_var(INPUT_POST, 'newemail') ? $_POST['newemail'] : null;
    $newemail = trim($newemail);
    $hashedPassword = password_hash($newpass, PASSWORD_DEFAULT);
        if (empty($newuser) || empty($newpass) || empty($newemail))
            {
                echo"<h1>Please fill in all fields</h1>";
                echo"<form action='index.php'>
                    </form>";
            }
        else
            {
                if (filter_var($newemail, FILTER_VALIDATE_EMAIL)) 
                    {
                        $dbConn = getConnection();
                        $queryEmailExists = "SELECT * FROM user WHERE email = '$newemail'";
                        $emailResult = $dbConn->query($queryEmailExists);
                        $emailCount = $emailResult->rowCount();
                        $queryUserExists = "SELECT * FROM `user` WHERE `username` = '$newuser'";
                        $userResult = $dbConn->query($queryUserExists);
                        $userCount = $userResult->rowCount();
                            if(($userCount >= 1) && ($emailCount >= 1))
                                {
                                    echo "<div class='form'>
                                            <div class='inside'>
                                                <form method='post' action='signup.php'>
                                                <h2>Email or Username already exists. Please provide different details</h2>
                                                <input class='submit' type='submit' value='Try Again'>
                                            </form>
                                            </div>
                                            </div>";
          
                                }
                            else if($emailCount >= 1)
                                {
                                    echo "<div class='form'>
                                            <div class='inside'>
                                                <form method='post' action='signup.php'>
                                                <h2>Email already exists. Please choose another email.</h1>
                                                <input class='submit' type='submit' value='Try Again'>
                                            </form>
                                            </div>
                                            </div>";

                                }
                            else if($userCount >= 1)
                                {
                                    echo "<div class='form'>
                                            <div class='inside'>
                                                <form method='post' action='signup.php'>
                                                <h2>Username already exists. Please choose another username.</h1>
                                                <input class='submit' type='submit' value='Try Again'>
                                            </form>
                                            </div>
                                            </div>";
                                }
                            else
                                {
                                    $sqlQuery = "INSERT INTO user (username, email, password) 
                                                VALUES ('$newuser', '$newemail', '$hashedPassword')";
                                    $statement = $dbConn->prepare($sqlQuery);     
                                    $statement->execute();
                                    $insertBadgeQuery = "INSERT INTO userBadges(userBadges.userID, userBadges.badgeID, identifier)
                                                        SELECT max(user.userID), 2, 'signup$newuser'
                                                        FROM user"; //INSERT SQL Statement
                                    $dbConn = getConnection();
                                    $statement = $dbConn->prepare($insertBadgeQuery);
                                    $statement->execute();
                                    echo "<div class='form'>
                                            <div class='inside'>
                                                <form method='post' action='index.php'>
                                                <h1>Successfully Signed Up</h1>
                                                <h2>Welcome, $newuser. You can now sign into the portal.</h2><br>
                                                <input class='submit' type='submit' value='Home Page'>
                                            </form><br><hr><br><h1>You've earned a badge!</h1>";
                                    $sqlQuery = "SELECT * 
                                                FROM badges 
                                                WHERE badgeID = 2"; //SELECT SQL Statement
                                    $dbConn = getConnection();
                                    $queryResult = $dbConn->query($sqlQuery);
                                    $rowObj = $queryResult->fetchObject();
                                    echo "<table class='tdeeTable'>
                                            <tr>
                                                <td>
                                                    <img class='badgeImg' src='{$rowObj->imageRef}'>
                                                </td>
                                            </tr>
                                            </table>
                                            <br>
                                            <p>{$rowObj->badgeDescription}</p>"; //Accredible (2020) Available at: https://www.accredible.com/ (Accessed: 02 May 2020).
                                        echo "<br>
                                            <p>Sign into your account to view your badge</p></div>
                                        </div>";
                                }
                            }
                        else
                            {
                                echo "<div class='form'>
                                            <div class='inside'>
                                                <form method='post' action='signup.php'>
                                                <h2>$newemail is not a valid Email Address</h1>
                                                <input class='submit' type='submit' value='Try Again'>
                                            </form>
                                            </div>
                                            </div>";
                            }
                        }
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>