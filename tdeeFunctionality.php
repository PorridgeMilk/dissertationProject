<?php
/*
 * tdeeFunctionality PHP.
 * Author: Richie Liu, w17020293.
 */ 
require_once "functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
echo makePageStart("TDEE");
echo makeLogoAndNavBar();
echo makeHeader();
echo startMain();   
echo validateLogin();
    $inactive = 1.2;
    $low = 1.375;
    $medium = 1.55;
    $mediumHigh = 1.65;
    $high = 1.725;
    $intense = 1.9;

    $age = filter_has_var(INPUT_POST, 'age') ? $_POST['age'] : null;
    $age = trim($age);

    $male = filter_has_var(INPUT_POST, 'male') ? $_POST['male'] : null;
    $male = trim($male);

    $female = filter_has_var(INPUT_POST, 'female') ? $_POST['female'] : null;
    $female = trim($female);

    $gender = filter_has_var(INPUT_POST, 'gender') ? $_POST['gender'] : null;
    $gender = trim($gender);

    $height = filter_has_var(INPUT_POST, 'height') ? $_POST['height'] : null;
    $height = trim($height);

    $weight = filter_has_var(INPUT_POST, 'weight') ? $_POST['weight'] : null;
    $weight = trim($weight);

    $activityLevel = filter_has_var(INPUT_POST, 'activityLevel') ? $_POST['activityLevel'] : null;
    $activityLevel = trim($activityLevel);

    $intWeight = (int)$weight; //Convert $weight to integer.
    $intHeight = (int)$height; //Convert $height to integer
    $intAge = (int)$age; //Convert $age to integer.


    $maleCalculation = (10 * $intWeight) + (6.25 * $intHeight) - (5 * $intAge) + 5; //Calculate Male BMR in Metric
    $femaleCalculation = (10 * $intWeight) + (6.25 * $intHeight) - (5 * $intAge) - 161; //Calculate Female BMR in Metric

    //$maleCalculation = 88.362 + (13.397 * $intWeight) + (4.799 * $intHeight) - (5.677 * $intAge);
    //$femaleCalculation = 447.593 + (9.247 * $intWeight) + (3.098 * $intHeight) - (4.330 * $intAge);


    $inactiveMale = round($maleCalculation * $inactive);
    $lowMale = round($maleCalculation * $low);
    $mediumMale = round($maleCalculation * $medium);
    $mediumHighMale = round($maleCalculation * $mediumHigh);
    $highMale = round($maleCalculation * $high);
    $intenseMale = round($maleCalculation * $intense);

    $inactiveFemale = round($femaleCalculation * $inactive);
    $lowFemale = round($femaleCalculation * $low);
    $mediumFemale = round($femaleCalculation * $medium);
    $mediumHighFemale = round($femaleCalculation * $mediumHigh);
    $highFemale = round($femaleCalculation * $high);
    $intenseFemale = round($femaleCalculation * $intense);

    $heightInMetres = ($intHeight / 100);
    $squaredHeight = pow($heightInMetres, 2);
    $bmi = $intWeight / $squaredHeight;

    $inactiveMaleGain = round($inactiveMale + 250);
    $lowMaleGain = round($lowMale + 250);
    $mediumMaleGain = round($mediumMale + 250);
    $mediumHighMaleGain = round($mediumHighMale + 250);
    $highMaleGain = round($highMale + 250);
    $intenseMaleGain = round($intenseMale + 250);

    $inactiveMaleLose = round($inactiveMale - 250);
    $lowMaleLose = round($lowMale - 250);
    $mediumMaleLose = round($mediumMale - 250);
    $mediumHighMaleLose = round($mediumHighMale - 250);
    $highMaleLose = round($highMale - 250);
    $intenseMaleLose = round($intenseMale - 250);


    $inactiveFemaleGain = round($inactiveFemale + 250);
    $lowFemaleGain = round($lowFemale + 250);
    $mediumFemaleGain = round($mediumFemale + 250);
    $mediumHighFemaleGain = round($mediumHighFemale + 250);
    $highFemaleGain = round($highFemale + 250);
    $intenseFemaleGain = round($intenseFemale + 250);

    $inactiveFemaleLose = round($inactiveFemale - 250);
    $lowFemaleLose = round($lowFemale - 250);
    $mediumFemaleLose = round($mediumFemale - 250);
    $mediumHighFemaleLose = round($mediumHighFemale - 250);
    $highFemaleLose = round($highFemale - 250);
    $intenseFemaleLose = round($intenseFemale - 250);

    //echo $squaredHeight;



   echo '<div class="formTdeeFunctionality">
        
        <div class="inside"> <h1>Your TDEE and BMI results</h1><br>
    <p>Your TDEE calculation ensures that you are eating enough calories every day in order to maintain weight.
        To gain or lose weight, it is recommended to eat at a surplus or deficit of +250/-250 calories from the value of your TDEE.</p><br><hr><br>';

    

    echo "<h1>Your TDEE</h2><br>
    <table class='tdeeTable'>
        
        <tr>
    
    
    ";



    echo "<div class='tdeeuser'><p> Gender: " . $gender . ". " . " Age: " . $age . ". " . "Height: " . $height . ". " . "Weight: " . $weight . ". " . "Activity Level: " . $activityLevel . "<br><br> </p><a href='tdee.php'>Recalculate your TDEE</a></div>" . "\n<br>";
    echo "<ul class='horizontalList'>";
    if($gender == 'male'){
        if($activityLevel == "inactive"){
            echo "<td><h1>" . $inactiveMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; //Finish this off
            echo "<td><h1>" . $inactiveMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $inactiveMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "low"){
            echo "<td><h1>" . $lowMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>";
            echo "<td><h1>" . $lowMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $lowMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "medium"){
            echo "<td><h1>" . $mediumMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>";
            echo "<td><h1>" . $mediumMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $mediumMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "medium-high"){
            echo "<td><h1>" . $mediumHighMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $mediumHighMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $mediumHighMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "high"){
            echo "<td><h1>" . $highMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>";
            echo "<td><h1>" . $highMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $highMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "intense"){
            echo "<td><h1>" . $intenseMale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>";
            echo "<td><h1>" . $intenseMaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $intenseMaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        }
    } else if($gender == 'female'){
        if($activityLevel == "inactive"){
            echo "<td><h1>" . $inactiveFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>";
            echo "<td><h1>" . $inactiveFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $inactiveFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "low"){
            echo "<td><h1>" . $lowFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $lowFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $lowFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "medium"){
            echo "<td><h1>" . $mediumFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $mediumFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $mediumFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "medium-high"){
            echo "<td><h1>" . $mediumHighFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $mediumHighFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $mediumHighFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "high"){
            echo "<td><h1>" . $highFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $highFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $highFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        } else if($activityLevel == "intense"){
            echo "<td><h1>" . $intenseFemale . "</h1><p> Calories Per Day</p><h2>Maintain</h2></td>"; 
            echo "<td><h1>" . $intenseFemaleGain . "</h1><p> Calories Per Day <h2>Gain Weight</h2></td>";
            echo "<td><h1>" . $intenseFemaleLose . "</h1><p> Calories Per Day.<h2>Lose Weight</h2></td>";
        }

    }
    echo "</tr></table><br><hr><br>";
        
         
    echo '
    <h2>Your BMI Score</h2><br>
    <table class="bmiScore">
    <tr>
    ';
    
    echo "<td><h1>" . number_format((float)$bmi, 1, '.', '') . "</h1></td></tr><tr>";

    if($bmi < 18.5){
        echo "<td><h3><span class='bmi'>Currently Underweight</span></h3></td>";
    } else if($bmi > 25 && $bmi < 30 ){
        echo "<td><h3><span class='bmi'>Currently Overweight</span></h3></td>";
    } else if($bmi >= 30){
        echo "<td><h3><span class='bmi'>Obese</span></h3></td>";
    }else{
        echo "<td><h3><span class='bmi'>Healthy Weight</span></h3></td>";
    }
    
    echo "</tr></table><br><hr><br>";

    if($bmi < 18.5){
        echo "<p>Based from your statistics, you are classed as <span class='bmi'>currently underweight</span>.</p>";
    } else if($bmi > 25 && $bmi < 30 ){
        echo "<p>Based from your statistics, you are classed as <span class='bmi'>currently overweight</span>.</p>";
    } else if($bmi >= 30){
        echo "<p>Based from your statistics, You are classed as <span class='bmi'>obese</span>.</p>";
    }else{
        echo "<p>Based from your statistics, You are classed at a <span class='bmi'>healthy weight</span>. Keep up the good work!</p>";
    }

    echo '<br><hr><br><div class="bmiTable">
      <h1>What your BMI Score means</h1><br>
      
      
      
      <p>Find out what category you are scored and what actions you should take by reading the guide below</p><br>
      <table>
      <tr>
      <th><h2>Underweight (<18.5)</h2></th>
      <th><h2>Healthy Weight (18.5 - 25)</h2></th>
      <th><h2>Overweight (25.1 - 29.9)</h2></th>
      <th><h2>Obese (>30)</h2></th>
      </tr>
      <tr>
      
      <td><p>If you have achieved the Underweight category, this means that you may not be eating enough or could be ill. Consult your local GP or doctor for more information</p></td>
      
      <td><p>If you are at a healthy weight, congratulations! Ensure that you know how to maintain your weight by reading the e-learning section and taking the quiz.</td>
      
      <td><p>If you are overweight, this means that you should follow a structured diet and workout plan in order to lose weight. Ensure that you are prepared by reading the '; echo '<a class="tableLink" href="learn.php">E-learning Section</a></td>
      
      <td><p>If your reading is Obese, this means that you are at a dangerous weight for your height and should consult a doctor before taking the necessary steps of exercising.</p></td>
      </tr>
      </table>
      </div>
      </div>
      </div>
     
     ';
    echo endMain();
    echo makeFooter();
    echo makePageEnd();
    ?>
