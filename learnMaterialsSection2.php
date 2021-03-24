<?php
/*
 * learnMaterialsSection2 PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo makePageStart("Learn - Section 2");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();
    echo validateLogin();
    $username = $_SESSION['username'];        
    echo '<div class="learnContainer">
            <div class="inside">
                <section class="learning">
                    <div class="tabs">
                        <a href="learnMaterialsWelcome.php">Welcome</a>
                        <a href="learnMaterialsSection1.php">Section 1: Exercising</a>
                        <a class="active" href="learnMaterialsSection2.php">Section 2: Healthy Eating</a>
                    </div>
                    <h1>Section 2: Healthy Eating</h1><br>
                    <h3>This Section covers basic information you need to know in order to construct a healthy eating habit.</h3>
                    <br>
                    <hr>
                    <br>
                    <h2>Understanding Healthy Eating</h2>
                    <br>
                    <p>Healthy eating is the objective of eating foods that supplement our bodies with plenty of nutrients. How do we achieve this?</p>
                    <br>
                    <p>There are various ways of eating healthy. The most common factors to keep in mind are:</p>
                    <div class="ulBox">
                        <ul> 
                            <li>Ensuring you eat plenty of fruit vegetables to ensure your body has enough nutrients to stay healthy.</li>
                            <li>Eating plenty of lean meat, fish, poultry, eggs, legumes, and beans.</li>  
                            <li>Dairies such as milk, cheese, or dairy alternatives such as soy milk, vegan cheese.</li>  
                            <li>Drink plenty of water. The recommended amount of water intake per day for the average person is 2 Litres, although that can vary depending on height and weight.</li>  
                        </ul>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h2>Diets</h2>
                    <br>
                    <p>There are plenty of fad diets which can change the foods we eat and replace them with alternative foods that are just as nutritous. 
                     Most of these diets are based on ethical, social, or lifestyle reasons and can be extremely healthy. </p>
                    <div class="ulBox">
                        <ul>
                            <li><span class="redText">Vegan</span> - Diet consisting of eating only fruits and vegetables</li>
                            <li><span class="redText">Pescetarian</span> - Diet consisting of fruits, vegetables, fish, dairy, but no meat</li>
                            <li><span class="redText">Vegetarian</span> - Diet consisting of fruits, vegetables, dairy, but no meat or fish</li>
                            <li><span class="redText">Flexitarian</span> - Diet that focuses on eating fruits and vegetables, with a small inclusion of meat and fish</li>
                        </ul>
                    </div>
                    <p><span class="redText">However, fad diets will not work and can do more harm than good if you are not eating a well balanced and healthy diet</span></p>
                    <br>
                    <hr>
                    <br>
                    <h2>Understanding Calories</h2><br>
                    <p>Calories are the energy that are taken into our bodies in order to function. 
                    Calories are made up three different macronutrients from Protein, Carbohydrates, and Fat</p>
                    <br>
                    <hr>
                    <br>
                    <h2>How Many Calories Do I Need?</h2><br>
                    <p>The consensus suggests the average adult should consume a specific amount of calories to maintain current body weight. Male individuals should be consuming around 2500 calories per day, while female individuals require an estimated 2000 calories per day.</p>
                    <br>
                    <p>It is difficult to gauge a definition of average; therefore, these calorie values should serve only as a guideline.</p>
                    <br>
                    <p>These figures are only to use as a general guideline. This is because everyone is different due to height, weight, age, genetics. 
                     For a more accurate estimation of required calories, use our <a href="tdee.php">TDEE Calculator</a> 
                     to determine how much you need to eat per day.</p>
                     <br> 
                     <p>The TDEE (Total Daily Energy Expenditure) calculator estimates your daily caloric intake to maintain, lose, or gain weight.</p><br><hr><br>
                    <h2>What are Protein, Carbohydrates, and Fat?</h2>
                    <br>
                    <p>These are the macronutrients that our bodies need to function correctly. Your body requires a certain amount of these each to ensure that you stay healthy.</p>
                    <br>
                    <p>Macronutrients make up the calories that we use for energy. One gram of Protein makes up four calories. One gram of Carbohydrates makes four calories. One gram of Fat makes nine calories.</p>
                    <br>
                    <hr>
                    <br>
                    <h2>What is the reason for weight gain?</h2>
                    <br>
                    <p>If your weight is slightly higher than before within a day, this does not mean you have put on fat. 
                     Your body can store many different types of items, such as water and food.</p>
                    <br>
                    <p>This can lead to daily fluctuations of your body weight, resulting in an inaccurate measurement if weighing at the wrong time.</p>
                    <br>
                    <p>To ensure that you weigh yourself more accurately, use the scales as soon as you have woken up in the morning and after going to the bathroom. 
                     Your body weight will be at its most accurate due to fasting caused by sleeping.</p><br><hr><br>
                    <h2>Different types of weight gain, and the process</h2><br>
                    <p>Different types of weight gain can occur in our bodies. The primary types of weight gain are:</p>
                        <div class="ulBox">
                            <ul>
                                <p><span class="redText">Fat Gain</span> - The process of storing fat cells in your body. Not to be confused with the macronutrient fat.</p>
                                <p><span class="redText">Muscle Gain</span> - The process of growing the muscle mass in your body.</p>
                            </ul>
                        </div>
                    <p>Both of these are achieved by the same factor, which is eating in a caloric surplus. 
                         A caloric surplus is achieved by eating over your daily maintenance calories, 
                         or simply eating more calories than your bodys daily needs</p>
                    <br>
                    <hr>
                    <br>
                    <h2>So, what is the difference?</h2><br>
                    <p>Muscle gain is caused by "damaging" your muscle fibres during exercise. 
                         Your body needs to produce enough resistance for the muscles to tear, 
                         and then repair itself by growing as a result. This, alongside a  caloric surplus, results in muscle growth.</p>
                         <br>
                    <p>It is essential to eat in a surplus for the body to use excess energy to grow muscles.</p>
                    <br>
                    <p><span class="redText">Note: The caloric surplus required for muscle growth also results in fat gain in addition. 
                         Muscles do not use all the excess caloric energy consumed for growth.
                         Therefore, limiting the surplus to a small amount (+250 calories) is optimal for minimal fat gain. 
                         </span></p><br>
                    <p>Fat gain, on the other hand, is caused by the body converts the excess calories as fat, which stores intp fat cells, causing your body to expand. 
                         If no exercise is performed, then all this energy is used towards fat storage.</p><br>
                    <p>Fat gain can lead to obesity, which leads to various complications, such as Diabetes, Cancer, and Heart Disease.</p>
                    <br>
                    <hr>
                    <br>
                    <h2>How do I lose weight?</h2><br>
                    <p>By eating slightly fewer calories from your maintenance calories, you will be in a caloric deficit. 
                         (e.g. Your Maintenance calories are 2500, eat at a deficit, such as 2100 to trigger a caloric deficit).</p>
                         <br>
                    <p>Weight loss is a gradual process; therefore it is essential not to eat in too much of a deficit, 
                         as your body needs a certain amount of calories to function correctly.</p>
                    <br>
                    <h2>Weight loss shortcuts?</h2><br>
                    <p><span class="redText">Unfortunately, there is no fast and healthy way for weight loss.</span> 
                         Eating a healthy and well balanced diet whilst maintaining a caloric deficit is key to success.</p>
                    <br>
                    <p>Heavily marketed products, such as <span class="redText">Flat Tummy Teas</span>  and <span class="redText">Fat Burners</span>  claim to have weight loss benefits. However, these are usually filled with caffeine and laxatives, 
                         and can be <span class="redText">dangerous for health</span>. Therefore, it is recommended to avoid these types of products</p>
                    <br>
                    <hr>
                    <br>
                </section>
                <section class="learning">
                    <br>';
                        $sqlQuery = "SELECT * 
                                    FROM userBadges 
                                    WHERE identifier = 'learn$username'"; //SQL SELECT Query
                        $dbConn = getConnection();
                        $statement = $dbConn->prepare($sqlQuery);
                        $statement->execute(array(':username' => $username));
                        $badgeObtained = $statement->fetchObject();
                        if (!$badgeObtained) 
                            {
                                $insertBadgeQuery = 
                                    "INSERT INTO userBadges(userBadges.userID, userBadges.badgeID, identifier)
                                    SELECT userID, 4, 'learn$username'
                                    FROM user
                                    WHERE username = '$username'
                                    ON DUPLICATE KEY 
                                    UPDATE userBadges.badgeID = 4"; //SQL INSERT Query
                                $dbConn = getConnection();
                                $statement = $dbConn->prepare($insertBadgeQuery);
                                $statement->execute();
                                echo"<h1>You've earned a new badge!</h1>";
                                $displayBadge = 
                                    "SELECT * 
                                    FROM userBadges                                                  
                                    JOIN badges 
                                    ON badges.badgeID = userBadges.badgeID
                                    WHERE identifier = 'learn$username'"; //SQL SELECT Query
                                $queryResult = $dbConn->query($displayBadge);
                                $rowObj = $queryResult->fetchObject();
                                echo "<img class='badgeImg' src='{$rowObj->imageRef}'>
                                    <br>
                                    <p>{$rowObj->badgeDescription}</p>";
                                echo "<a href='account.php'>View your badge collection here</a>
                                <br>
                                <br>";       
                            }
                        else
                            {
                                echo"<h1>You've already earned this badge</h1>";
                                $displayBadge = 
                                    "SELECT * 
                                    FROM userBadges                                         
                                    JOIN badges 
                                    ON badges.badgeID = userBadges.badgeID
                                    WHERE identifier = 'learn$username'"; //SQL SELECT QUERY
                                $queryResult = $dbConn->query($displayBadge);
                                $rowObj = $queryResult->fetchObject();
                                echo "<img class='badgeImg' src='{$rowObj->imageRef}'>
                                <br>
                                <p>{$rowObj->badgeDescription}</p>";
                                echo "<a href='account.php'>View your badge collection here</a>
                                <br>
                                <br>";
                    }
                echo'</section>
                <section class="learning">
                    <br>
                    <h1>Ready for a challenge?</h1><br>
                    <p>Congratulations! You have made it this far, and its only a matter of time until you learn to fly. 
                        Take our quiz in order to see your understanding and knowledge of the topics covered. You can do it!</p>
                        <form action="quiz.php">
                            <input class="submit" type="submit" value="Take me to the Quiz">
                        </form>
                </section>
            </div>
        </div>';
    echo endMain();
    echo makeFooter();
    echo makePageEnd();
?>