<?php
/*
 * loginFunctionality PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo loadJS();
    echo makePageStart("styleSheet.css");
    echo makeNavBarWithoutAccount();
    echo makeHeader();
    echo startMain();
    $username = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;
    $username = trim($username);
    $password = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;
    $password = trim($password);
    $username = filter_var($username,FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username) || empty($password))
            {
                echo "Please type in both a username and password";
                echo makeBackButton();
            }
        $dbConn = getConnection(); //Call Function getConnection
        $sqlQuery = "SELECT password 
                    FROM user 
                    WHERE username = :username";    //SQL SELECCT Query
        $statement = $dbConn->prepare($sqlQuery);
        $statement->execute(array(':username' => $username));
        $user = $statement->fetchObject();
            if ($user) 
                {
                    $passwordMatch = $user->password;
                        if (password_verify($password, $passwordMatch)) 
                            {
                                $_SESSION['username'] = $username;
                                $_SESSION['logged-in'] = true;
                                echo "<div class='form'>
                                        <div class='inside'>
                                            <form method='post' action='index.php'>
                                                <h1>Successfully Logged In</h1>
                                                <p>Logged in as <span class='redText'>" . $username . "</span></p>
                                                <br>
                                                <input class='submit' type='submit' value='Access the Home Page'>
                                            </form>
                                        </div>
                                    </div>";
                            }
                        else
                            {
                                echo "<div class='form'>
                                        <div class='inside'>
                                            <form method='post' action='login.php'>
                                                <h2>Login failed, please try again.</h1>
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
                                <form method='post' action='login.php'>
                                    <h2>Login failed, please try again.</h1>
                                    <input class='submit' type='submit' value='Back'>
                                </form>
                            </div>
                        </div>";
            }
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>