<?php
/*
 * quizResults PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
function undefined(){}
set_error_handler("undefined");
    echo $foo["bar"];
    echo makePageStart("Quiz Results");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain(); 
    echo validateLogin();
    $username = $_SESSION['username'];
    $date = date('Y-m-d H:i:s');
    $currentQuizScore = filter_has_var(INPUT_POST, 'currentQuizScore') ? $_POST['currentQuizScore'] : null;
    echo "<div class='learnContainer'>
            <div class='inside'> 
                <div class='quizResults'>
                    <h1>Quiz Results</h1>";
                        $answer1 = $_POST['question-1-answers'];
                        $answer2 = $_POST['question-2-answers'];
                        $answer3 = $_POST['question-3-answers'];
                        $answer4 = $_POST['question-4-answers'];
                        $answer5 = $_POST['question-5-answers'];
                        $answer6 = $_POST['question-6-answers'];
                        $answer7 = $_POST['question-7-answers'];
                        $answer8 = $_POST['question-8-answers'];
                        $answer9 = $_POST['question-9-answers'];
                        $answer10 = $_POST['question-10-answers'];
                        $answer11 = $_POST['question-11-answers'];
                        $answer12 = $_POST['question-12-answers'];
                        $answer13 = $_POST['question-13-answers'];
                        $answer14 = $_POST['question-14-answers'];
                        $answer15 = $_POST['question-15-answers'];
                        $answer16 = $_POST['question-16-answers'];
                        $answer17 = $_POST['question-17-answers'];
                        $answer18 = $_POST['question-18-answers'];
                        $answer19 = $_POST['question-19-answers'];
                        $answer20 = $_POST['question-20-answers'];
                            if ((!isset($answer1)) || 
                               (!isset($answer2)) ||
                               (!isset($answer3)) ||
                               (!isset($answer4)) ||
                               (!isset($answer5)) ||
                               (!isset($answer6)) ||
                               (!isset($answer7)) ||
                               (!isset($answer8)) ||
                               (!isset($answer9)) ||
                               (!isset($answer10)) ||
                               (!isset($answer11)) ||
                               (!isset($answer12)) ||
                               (!isset($answer13)) ||
                               (!isset($answer14)) ||
                               (!isset($answer15)) ||
                               (!isset($answer16)) ||
                               (!isset($answer17)) ||
                               (!isset($answer18)) ||
                               (!isset($answer19)) ||
                               (!isset($answer20))) 
                                {
                                    echo "<p>You have left some questions blank. <a href='quiz.php'>Try Again</a></p>";
                                }
                            else
                                {
                                    $totalCorrect = 0;
                                    if ($answer1 == "A") { $totalCorrect++; }
                                    if ($answer2 == "B") { $totalCorrect++; }
                                    if ($answer3 == "A") { $totalCorrect++; }
                                    if ($answer4 == "C") { $totalCorrect++; }
                                    if ($answer5 == "C") { $totalCorrect++; }
                                    if ($answer6 == "D") { $totalCorrect++; }
                                    if ($answer7 == "D") { $totalCorrect++; }
                                    if ($answer8 == "A") { $totalCorrect++; }
                                    if ($answer9 == "A") { $totalCorrect++; }
                                    if ($answer10 == "C") { $totalCorrect++; }
                                    if ($answer11 == "A") { $totalCorrect++; }
                                    if ($answer12 == "B") { $totalCorrect++; }
                                    if ($answer13 == "A") { $totalCorrect++; }
                                    if ($answer14 == "C") { $totalCorrect++; }
                                    if ($answer15 == "C") { $totalCorrect++; }
                                    if ($answer16 == "B") { $totalCorrect++; }
                                    if ($answer17 == "D") { $totalCorrect++; }
                                    if ($answer18 == "A") { $totalCorrect++; }
                                    if ($answer19 == "B") { $totalCorrect++; }
                                    if ($answer20 == "A") { $totalCorrect++; }
                                echo"<div id='results'>
                                        <h1>$totalCorrect / 20 correct</h1>
                                    </div>";
                                if($totalCorrect > $currentQuizScore)
                                    {
                                        $quizQuery = "INSERT INTO Quiz (Quiz.userID, quizScore, Quiz.username, quizDate)
                                                      SELECT userID, $totalCorrect, '$username', now() FROM user
                                                      WHERE username = '$username' 
                                                      ON DUPLICATE KEY UPDATE quizScore='$totalCorrect', quizDate = now()"; //INSERT SQL Statement
                                        $dbConn = getConnection();
                                        $statement = $dbConn->prepare($quizQuery);
                                        $statement->execute();
                                        echo "<h3>Your Quiz result has been saved.</h3>";      
                                    }
                                echo leaderboard();
                                $sqlQuery = "SELECT * 
                                            FROM userBadges
                                            WHERE identifier = 'quiz$username'"; //SQLECT SQL Statement
                                      $dbConn = getConnection();
                                      $statement = $dbConn->prepare($sqlQuery);
                                      $statement->execute(array(':username' => $username));
                                      $badgeObtained = $statement->fetchObject();
                                    if (!$badgeObtained) 
                                        {
                                            $insertBadgeQuery = "INSERT INTO userBadges(userBadges.userID, userBadges.badgeID, identifier)
                                                                SELECT userID, 3, 'quiz$username'
                                                                FROM user
                                                                WHERE username = '$username'
                                                                ON DUPLICATE KEY UPDATE userBadges.badgeID = 3"; //SELECT SQL Statement
                                            $dbConn = getConnection();
                                            $statement = $dbConn->prepare($insertBadgeQuery);
                                            $statement->execute();
                                            echo"<br>
                                                <br>
                                                <h1>You've earned a new badge!</h1>";
                                            $displayBadge = "SELECT * FROM userBadges 
                                                            JOIN badges ON badges.badgeID = userBadges.badgeID
                                                            WHERE identifier = 'quiz$username'"; //SELECT SQL Statement
                                            $queryResult = $dbConn->query($displayBadge);
                                            $rowObj = $queryResult->fetchObject();
                                            echo "<img class='badgeImg' src='{$rowObj->imageRef}'>
                                            <br>
                                            <p>{$rowObj->badgeDescription}</p>";
                                            echo "<a href='account.php'>View your badge collection here</a><br><br>"; //Accredible (2020) Available at: https://www.accredible.com/ (Accessed: 02 May 2020).
                                        }
                                    else
                                        {
                                            echo"<br>
                                                <br>
                                                <h1>You've already earned this badge</h1>";
                                            $displayBadge = "SELECT * FROM userBadges 
                                                            JOIN badges ON badges.badgeID = userBadges.badgeID
                                                            WHERE identifier = 'quiz$username'"; //SELECT SQL Statement
                                            $queryResult = $dbConn->query($displayBadge);
                                            $rowObj = $queryResult->fetchObject();
                                            echo "<img class='badgeImg' src='{$rowObj->imageRef}'>
                                                <br>
                                                <p>{$rowObj->badgeDescription}</p>";
                                            echo "<a href='account.php'>View your badge collection here</a><br><br>"; //Accredible (2020) Available at: https://www.accredible.com/ (Accessed: 02 May 2020).
                                        }    
                                    echo "</div>
                                    </div>";
                                }
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>
     
  