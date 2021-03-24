<?php
/*
 * tdee PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start();
    echo loadJS();
    echo makePageStart("TDEE Calculator");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();  
    echo "<div class='form'>
            <div class='inside'>
                <form action='tdeeFunctionality.php' method='post'>
                    <h1>TDEE Calculator</h1><br>
                    <p>TDEE (Total Daily Energy Expenditure) is the amount of calories burned per day.</p><br>
                    <p> Your TDEE calculation ensures that you are eating enough calories every day in order to maintain weight.
                    To gain or lose weight, it is recommended to eat at a surplus or deficit of +250/-250 calories from the value of your TDEE.</p><br>
                    <label>Gender<span class='req'>*</span></label>
                    <div class='genderbox'>
                        <input class='gender' type='radio' value='male' name='gender' id='male' required>
                        <label for='male' class='genderLabel'>Male</label>
                        <input class='gender' type='radio' value='female' name='gender' id='female'>
                        <label for='female' class='genderLabel'>Female</label>
                    </div>
                <br>
                <br>
                <br>
                <label>Age
                <span class='req'>*</span>
                    <input type='number' placeholder='Age' name='age' max='130' maxlength='3' min='1' required>
                </label>
                <label>
                    Height (Centimetres)<span class='req'>*</span>
                    <input type='number' placeholder='Height (Centimetres)' name='height' maxlength='3' min='1' max='255' required> 
                </label>
                <label>
                    Weight (Kilograms)<span class='req'>*</span>
                    <input type='number' placeholder='Weight (Kilograms)' name='weight' maxlength='3' min='1' max='700' required>
                </label>
                <label>
                    Activity Level<span class='req'>*</span>
                    <div class='activitySelect'>
                        <select class='select' name='activityLevel'>
                            <option class='othersActivity' value='inactive'>Inactive</option>
                            <option class='othersActivity' value='low'>Low</option>
                            <option class='othersActivity' value='medium'>Medium</option>
                            <option class='othersActivity' value='medium-high'>Medium-high</option>
                            <option class='othersActivity' value='high'>High</option>
                            <option class='othersActivity' value='intense'>Intense</option>
                        </select>
                    </div>
                </label>
                <input class='submit' type='submit' value='Calculate TDEE' name='tdeeSubmit'>
            </form>
        </div>
     </div>";
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>

