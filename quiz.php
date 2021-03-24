<?php
/*
 * quiz PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start(); 
    echo makePageStart("Quiz");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain(); 
    echo validateLogin();
    function undefined(){}
    set_error_handler("undefined");
    echo $foo["bar"];
?>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='quizScript.js' type='text/javascript'></script>
<?php 
    if (isset($_SESSION['logged-in']) && $_SESSION['logged-in']) 
        {//if statement, session variable exists
            if (isset($_SESSION['username'])) 
                {//if statement, session variables exist
                    $username = $_SESSION['username'];//assigns session parameter to variable
                    $_SESSION['logged-in'] = true;//session variable is true
                    echo'<div class="quizwrap">
                            <div id="page-wrap">
                            <h1>Fitness.ly Quiz</h1><br>
                            <form action="quizResults.php" method="post" id="quiz" class-="quiz">
                                <ol>
                                    <li>
                                        <h3>Question 1: What do calories consist of?</h3><br>
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                            <label for="question-1-answers-A">A) Macronutrients and energy </label>
                                        </div>
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                            <label for="question-1-answers-B">B) Blood </label>
                                        </div>
                                        <div>
                                            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                            <label for="question-1-answers-C">C) Water</label>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                <h3>Question 2: Which one of these is the correct combination of macronutrients?</h3><br>

                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                    <label for="question-2-answers-A">A) Vitamins A, B, D</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                    <label for="question-2-answers-B">B) Protein, Carbohydrates, and Fat</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                    <label for="question-2-answers-C">C) Fish, Meat, Vegetables</label>
                                </div>


                            </li>
                            <hr>
                            <li>

                                <h3>Question 3: What is the purpose of a TDEE calculator?</h3><br>

                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                    <label for="question-3-answers-A">A) To calculate required daily calorie intake</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                    <label for="question-3-answers-B">B) To calculate a workout plan</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                    <label for="question-3-answers-C">C) To solve mathematics equations</label>
                                </div>


                            </li>
                            <hr>
                            <li>

                                <h3>Question 4: What muscle is primarily used in a push-up?</h3><br>

                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                    <label for="question-4-answers-A">A) Biceps</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                    <label for="question-4-answers-B">B) Back</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                    <label for="question-4-answers-C">C) Chest</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                    <label for="question-4-answers-D">D) Legs</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 5: If you are currently suffering from a muscular injury, who should you consult for treatment?</h3><br>

                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                    <label for="question-5-answers-A">A) Personal Trainer</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                    <label for="question-5-answers-B">B) Gym Owner</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                    <label for="question-5-answers-C">C) Physiotherapist</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                    <label for="question-5-answers-D">D) Dentist</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 6: Which diet consists of eating only vegetables and dairy?</h3><br>

                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                    <label for="question-6-answers-A">A) Vegan</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                    <label for="question-6-answers-B">B) Paleo</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                    <label for="question-6-answers-C">C) Carnivorous</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                    <label for="question-6-answers-D">D) Vegetarian</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 7: What is the fastest and healthiest way to lose fat?</h3><br>

                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                    <label for="question-7-answers-A">A) Starvation</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                    <label for="question-7-answers-B">B) Water-fasting</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                    <label for="question-7-answers-C">C) Eating Vegan</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                    <label for="question-7-answers-D">D) There is no fast and healthy way to lose fat</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 8: What is a pescetarian diet?</h3><br>

                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                    <label for="question-8-answers-A">A) A diet consisting of vegetables, fish, dairy, but no meat.</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                    <label for="question-8-answers-B">B) An only meat-based diet.</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                    <label for="question-8-answers-C">C) A diet that only consists of fish.</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                    <label for="question-8-answers-D">D) A diet that consists only of fruit.</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 9: Which muscles are found within the arms?</h3><br>

                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                    <label for="question-9-answers-A">A) Biceps, Triceps, Forearms</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                    <label for="question-9-answers-B">B) Hamstrings, Quadriceps, Calves</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                    <label for="question-9-answers-C">C) Chest, Biceps, Shoulders</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                    <label for="question-9-answers-D">D) Back, Triceps, Abdominals</label>
                                </div>

                            </li>
                            <hr>
                            <li>

                                <h3>Question 10: What is the ideal diet?</h3><br>

                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                                    <label for="question-10-answers-A">A) A diet that consists of primarily protein</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                    <label for="question-10-answers-B">B) A diet that consists of only fruit</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                    <label for="question-10-answers-C">C) A well-balanced diet</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 11: How long should you exercise per week?</h3><br>

                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                                    <label for="question-11-answers-A">A) 2.5 Hours a week</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                    <label for="question-11-answers-B">B) 30 minutes a week</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                    <label for="question-11-answers-C">C) Never</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 12: What is the average daily caloric intake to maintain weight for female individuals?</h3><br>

                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                                    <label for="question-12-answers-A">A) 3000 calories</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                    <label for="question-12-answers-B">B) 2000 calories</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                    <label for="question-12-answers-C">C) 1000 calories</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 13: What is not related to fitness and health?</h3><br>

                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                                    <label for="question-13-answers-A">A) Learning to drive</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                    <label for="question-13-answers-B">B) Structuring a workout plan</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                    <label for="question-13-answers-C">C) Eating fruits and vegetables</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 14: Why is good posture important when sitting down?</h3><br>

                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                                    <label for="question-14-answers-A">A) To make sure you lose weight faster</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                    <label for="question-14-answers-B">B) To ensure that you are watching TV properly</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                    <label for="question-14-answers-C">C) To ensure that you minimise the risk of injuries from poor posture</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 15: If you suddenly gain weight within a day, what could be the main cause?</h3><br>

                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                                    <label for="question-15-answers-A">A) Muscle gain</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                    <label for="question-15-answers-B">B) Rapid fat gain</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                    <label for="question-15-answers-C">C) Water weight gained through food and water</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 16: If you do not have access to a gym, what form of fitness could you do instead of lifting weights?</h3><br>

                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                                    <label for="question-16-answers-A">A) Watching TV</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                                    <label for="question-16-answers-B">B) Bodyweight Training</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                                    <label for="question-16-answers-C">C) Sleeping</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 17: What risk can be associated with obesity?</h3><br>

                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                                    <label for="question-17-answers-A">A) Heart disease</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                                    <label for="question-17-answers-B">B) Diabetes</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                                    <label for="question-17-answers-C">C) Cancer</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                                    <label for="question-17-answers-D">D) All of the above</label>
                                </div>



                            </li>
                            <hr>
                            <li>

                                <h3>Question 18: What does TDEE Stand for?</h3><br>

                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                                    <label for="question-18-answers-A">A) Total Daily Energy Expenditure</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                                    <label for="question-18-answers-B">B) Total Dietary Excess Effort</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                                    <label for="question-18-answers-C">C) Tolerated Dairy Eggs Energy</label>
                                </div>




                            </li>
                            <hr>
                            <li>

                                <h3>Question 19: What is the average required water intake?</h3><br>

                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                                    <label for="question-19-answers-A">A) 0.5 litres</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                                    <label for="question-19-answers-B">B) 2 litres</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                                    <label for="question-19-answers-C">C) 5 litres</label>
                                </div>


                            </li>
                            <hr>
                            <li>

                                <h3>Question 20: Why is adequate rest important after exercise?</h3><br>

                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                                    <label for="question-20-answers-A">A) To ensure that muscles and joints recover</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                                    <label for="question-20-answers-B">B) To lose weight</label>
                                </div>

                                <div>
                                    <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                                    <label for="question-20-answers-C">C) To increase appetite</label>
                                </div>

                            </li>
                            <hr>

                        </ol>



                ';

                     $getUserScoreQuery = "SELECT quizScore FROM Quiz WHERE username = '$username' AND quizScore IS NOT NULL";

                    $dbConn = getConnection();
                    $queryResult = $dbConn->query($getUserScoreQuery);
                            $rowObj = $queryResult->fetchObject();

                        echo "<input type='hidden' value='{$rowObj->quizScore}' name='currentQuizScore'>
                              <p>Your last quiz score was {$rowObj->quizScore}</p><br>

                        ";

                        echo "<input class='submit' type='submit' value='Submit' class='submitbtn'>
                              </form>
                              </div>
                              </div>";






            }
        }
    else
        {
            echo'<div class="mainBox">
                    <div class="inside">
                        <h1>Ready to <span class="redText">FLY</span>?</h1><br>
                        <p>If you feel ready, take our quiz in order to challenge your knowledge based on what you have learned in the guide so far.</p><br>
                        <a href="login.php">Log in to access the quiz</a>
                        <img src="images/yoga-1greyscale.jpg" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </div>'; // image source: Unsplash (2020) Available at: https://unsplash.com/photos/F2qh3yjz6Jk (Accessed: 02 May 2020).
    echo loadJS();   
    echo endMain();
    echo makePageEnd();
        }

?>
<?php 
    echo endMain();
    echo makeFooter();
    echo makePageEnd();
?>