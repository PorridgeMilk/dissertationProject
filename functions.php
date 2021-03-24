<?php
/*
 * functions PHP.
 * Author: Richie Liu, w17020293.
 */

ini_set("session.save_path", "/home/unn_w17020293/sessionData");


function loadJS(){
    echo "<script src='script.js' type='text/javascript'></script>";
}

function loadQuizJS(){
    echo "
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='quizScript.js' type='text/javascript'></script>
    ";
}


function makePageStart($makePageStart)//create function
{
    $pageStartContent = <<<PAGESTART
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>$makePageStart</title> 
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Montserrat:wght@600&family=Raleway:wght@500&display=swap" rel="stylesheet">
        
	</head>
	<body>
    <div class="container">
PAGESTART;
    $pageStartContent .= "\n";
    return $pageStartContent;
}






function makePageEnd(){
        
    echo "</div>
    
    </body></html>";
}

function makeLogoAndNavBar(){
    echo
   '<div id="logo>
    <img height="200px" width="200px">
    </div>';
    
    if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) {//if statement, session variable exists
    if (isset($_SESSION['username'])) {//if statement, session variables exist
        $username = $_SESSION['username'];//assigns session parameter to variable

        $_SESSION['logged-in'] = true;//session variable is true
        
        echo makeNavBar();
        echo makeLogOut();//retrieves makeLogOut from functions.php
        }
    } else {//else statement
            
        echo "
        <div id='logo'>
        </div>";
        echo makeNavBarNotLoggedIn();
    }
    
}



function makeHeader(){
    
    echo
    '<header>
    
    
    
    </header>';
    
    
}

function makeNavBarNotLoggedIn(){

echo'
  <div class="menu">
  <nav>
  <ul>
  
  <li id="nav"><a style="font-weight:bold" href="index.php">Fitness.ly</a></li>
  <li id="nav"><a href="about.php">About</a></li>
  <li id="nav"><a href="learn.php">Learn</a></li>
  <li id="nav"><a href="quiz.php">Quiz</a></li>
  <li id="nav"><a href="leaderboard.php">Leaderboard</a></li>
  <li id="nav"><a href="map.php">Gym Finder</a></li>
  <li id="nav"><a href="tdee.php">TDEE Calculator</a></li>
  <li id="nav" style="float: right"><a href="login.php">Log In/Sign Up</a></li>
  
  </ul>
  </nav>
  </div>';

}

function makeNavBarWithoutAccount(){

echo'
  <div class="menu">
  <nav>
  <ul>
  
  <li id="nav"><a style="font-weight:bold" href="index.php">Fitness.ly</a></li>
  <li id="nav"><a href="about.php">About</a></li>
  <li id="nav"><a href="learn.php">Learn</a></li>
  <li id="nav"><a href="quiz.php">Quiz</a></li>
  <li id="nav"><a href="leaderboard.php">Leaderboard</a></li>
  <li id="nav"><a href="map.php">Gym Finder</a></li>
  <li id="nav"><a href="tdee.php">TDEE Calculator</a></li>
  </ul>
  </nav>
  </div>';

}

function makeNavBar(){

    $username = $_SESSION['username'];
    
echo'
  <div class="menu">
  <nav>
  <ul>
  
  <li id="nav"><a style="font-weight:bold" href="index.php">Fitness.ly</a></li>
  <li id="nav"><a href="about.php">About</a></li>
  <li id="nav"><a href="learn.php">Learn</a></li>
  <li id="nav"><a href="quiz.php">Quiz</a></li>
  <li id="nav"><a href="leaderboard.php">Leaderboard</a></li>
  <li id="nav"><a href="map.php">Gym Finder</a></li>
  <li id="nav"><a href="tdee.php">TDEE Calculator</a></li>
  <li id="nav" style="float: right"><a href="logout.php">Log Out</a></li>
  <li id="nav" style="float: right"><a href="account.php">Hi, ';echo $username, '</a></li>
  
  
  </ul>
  </nav>
  </div>';

}


function makeFooter(){
    
    echo'<div class="footer">
    <p>Richie Liu, w17020293</p>
    </div>';
    
}

function startMain(){
    echo'<main>';
}

function endMain(){
    echo'</main>';
}

function getConnection()//create function
{


    try {
        $connection = new PDO("mysql:host=localhost;dbname=unn_w17020293", "unn_w17020293", "Welcome1");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
        echo "<p>Connection Successful</p>";

    } catch (Exception $e) {
        throw new Exception("Connection error " . $e->getMessage(), 0, $e);
    }

}

function makeLogOut()//create function
{
    $logOutContent = <<< FOOT
<footer>
<form method='post' action='logout.php'>
        
</form>
</footer>
FOOT;
    $logOutContent .= "\n";
    return $logOutContent;
}

function validateLogin(){
    
    
}


function makeloginForm(){
    echo'
    
    
    <div class="form">
    <div class="inside">
    <ul class="tab-group">
        <li class="tab"><a href="signup.php">Sign Up</a></li>
        <li class="tab-active"><a>Log In</a></li>
      </ul>
    <h1> Log into your Account </h1>
    <form action="loginFunctionality.php" method="post">

    <label>
    User Name<span class="req">*</span>
    <input type="text" placeholder="User Name" name="username" id="username" required="required">
    </label>
    <label>
    Password<span class="req">*</span>
    <input type="password" placeholder="Password" name="password" id="password" required="required">
    </label>
    <a class="forgotPassword" href="#">Forgot Login Details?</a>
    <input class="submit" type="submit" value="Log In">
    
   
    </form>
    </div>
    </div>';
    
}
    
function makeSignupForm(){
    
          echo '
          
            <div class="form">
            <div class="inside">
            <ul class="tab-group">
                <li class="tab-active"><a>Sign Up</a></li>
                <li class="tab"><a href="login.php">Log In</a></li>
            </ul>
            <h1>Register for an account</h1>
            <form action="signupFunctionality.php" method="post">
            
            <label>
            Email Address<span class="req">*</span>
            <input type="email" name="newemail"  placeholder="Email Address" required>
            </label>
            
            <label>
            User Name (Maximum 16 characters)<span class="req">*</span>
            <input type="text" name="newuser" maxlength="16" placeholder="User Name" required>
            </label>
        
            <label>
            Password (Minimum 8 characters)<span class="req">*</span>
            <input type="password" name="newpass" minlength="8" placeholder="Password" required>
            </label>
            <a class="forgotPassword" href="login.php">Already have an account? Click here.</a>
            
            <input class="submit" type="submit" value="Sign Up">
            </div>
            </div>';
    

}




function leaderboard(){
                
                
                echo "<h3>Are you in the leaderboard top 10? See where you rank below</h3>";
                
                 echo"</div>";
                $leaderboardQuery = "SELECT * 
                                     FROM Quiz
                                     ORDER BY quizScore DESC
                                     LIMIT 10";
                
                $dbConn = getConnection();
                echo"<div class='leaderboard'>
                    
                    ";
                echo"<h1>Quiz Rankings</h1>
                    <table class='resultsTable'>";
                
                    $rank = 1;
                
                $queryResult = $dbConn->query($leaderboardQuery);
                while ($rowObj = $queryResult->fetchObject()){
    
                        echo"<tr><td>";       
                        echo "<p>" . $rank++ . "</p>";
                        echo "</td>
                        <td><p>{$rowObj->username}</p></td>
                        <td><p>{$rowObj->quizScore}/20</p></td>";
                        
                    }
               
                echo "</tr></table></div>";
            
        
                
           }

?>