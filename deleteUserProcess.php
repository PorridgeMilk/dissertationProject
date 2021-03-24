<?php
/*
 * deleteUserProcess PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Delete Account"); //Call function makePageStart
    echo makeNavBarWithoutAccount(); //Call function  makeNavBarWithoutAccount
    echo makeHeader(); //Call function makeHeader
    echo startMain(); //Call function startMain
    echo validateLogin(); //Call function validateLogin
function undefined()
{
}
set_error_handler("undefined");
$password = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null; //POST Variable password
$email = filter_has_var(INPUT_POST, 'email') ? $_POST['email'] : null;  //POST variable email
$username = $_SESSION['username'];  //SESSION variable email
try
    {
    $dbConn = getConnection(); //Call Function getConnection
    $sqlQuery = "SELECT password FROM user WHERE username = :username AND email = :email";  //SQL SELECT Query
    $statement = $dbConn->prepare($sqlQuery);
    $statement->execute(array(':username' => $username, ':email' => $email));
    $user = $statement->fetchObject();
        if ($user) 
            {
                $passwordMatch = $user->password;
                    if (password_verify($password, $passwordMatch)) 
                    {
                        $deleteUser = "DELETE FROM userBadges WHERE userID IN 
                                       (
                                       SELECT * FROM 
                                            (
                                                SELECT userID FROM user WHERE username = :username AND email = :email
                                            ) 
                                            AS P
                                       )"; //DELETE SELECT SQL Query
                        $statement = $dbConn->prepare($deleteUser);   
                        $statement->execute(array(':email' => $email, ':username' => $username));
                        $deleteUser = "DELETE FROM Quiz 
                                       WHERE username = :username"; //DELETE SQL Query
                        $statement = $dbConn->prepare($deleteUser);   
                        $statement->execute(array(':username' => $username));
                        $deleteUser = "DELETE FROM user 
                                       WHERE username = :username"; //DELETE SQL Query
                        $statement = $dbConn->prepare($deleteUser);   
                        $statement->execute(array(':username' => $username));
                        echo "<div class='form'>
                                <div class='inside'>
                                    <form method='post' action='index.php'>
                                        <h2>Your account has been successfully Deleted</h2>
                                        <input class='submit' type='submit' value='Return to Home Page'>
                                    </form>
                                </div>
                              </div>";
                        session_destroy();  //Destroy Session Variable
                    }
                    else
                    {
                        echo "<div class='form'>
                                <div class='inside'>
                                    <form method='post' action='deleteUser.php'>
                                    <h2>Incorrect details, please try again.</h1>
                                    <input class='submit' type='submit' value='Back'>
                                </form>
                                </div>
                            </div>";
                    }
            } 
        else 
            {
                echo "<div class='form'>
                        <div class='inside'>
                            <form method='post' action='deleteUser.php'>
                                <h2>Incorrect details, please try again</h1>
                                <input class='submit' type='submit' value='Back'>
                            </form>
                        </div>
                    </div>";
            }
    }
catch(Exception $e)
    {
    echo "<div class='form'>
            <div class='inside'>
                <form method='post' action='deleteUser.php'>
                    <h2>An Error Occured</h2>
                    <p>Your email or password may be incorrect</p>
                    <input class='submit' type='submit' value='Please try again'>
                </form>
            </div>
         </div>"; 
    $e->getMessage();
}  
echo endMain();
echo makePageEnd();
echo makeFooter();
?>
   
          
      
      