<?php
/*
 * learnMaterialsSection1 PHP.
 * Author: Richie Liu, w17020293.
 */
require_once"functions.php";
ini_set("session.save_path", "/home/unn_w17020293/sessionData");
session_start(); 
    echo makePageStart("Learn - Section 1");
    echo makeLogoAndNavBar();
    echo makeHeader();
    echo startMain();
    echo validateLogin();
?>
    <div class="learnContainer">
        <div class="inside">
            <section class="learning">   
                <div class="tabs">
                    <a href="learnMaterialsWelcome.php">Welcome</a>
                    <a class="active" href="learnMaterialsSection1.php">Section 1: Exercising</a>
                    <a href="learnMaterialsSection2.php">Section 2: Healthy Eating</a>
                </div>
            <h1>Section 1: Exercising</h1><br>
            <h3>This section explains how an individual should exercise and the frequency of exercise per week. </h3>
            <br>
            <hr>
            <br>            
            <h2>How Long Should You Exercise?</h2><br> 
            <p>The consensus suggests that all individuals should exercise for a minimum of 2.5 hours a week. 
                 This equivalates to 150 minutes of exercise an individual should perform to stay healthy and active.</p>
            <br>
            <p>We recommend to divide this amount of exercise into different days. For instance, you can perform 50 minutes of exercise 3 times a week, or 25 minutes of exercise 6 times a week.</p>
            <hr>
            <br>
            <h2>Forms of exercise</h2><br>
            <p>When the word "exercise" appears in an individual's mind, they may think of aerobic exercises such as running, cycling, 
                 or resistance exercises, such as gym weight lifting. This is the usual route for many who are looking into becoming fit.</p><br>
            <p>However, not everyone is capable of performing such exercises. Injuries, disabilities, and other conditions can prevent us from doing strenuous exercise. 
                 The good news is, running and lifting weights is not the only way of exercise. </p><br>
            <p>Bodyweight Exercises, Yoga, Wheelchair-based sports, dancing.</p><br>
            <p><span class="redText">Keep in mind, however, if you do have an injury or disability, consult your Doctor or Physiotherapist before attempting to perform new exercises.</span></p><br><hr><br>
            <h2>Using your muscles</h2><br>
            <table class="muscleTable">
                <tr>
                    <th>Shoulders</th>
                    <th>Arms</th>
                    <th>Chest</th>
                    <th>Back</th>
                    <th>Legs</th>
                 </tr>
                 <tr>
                    <td>Front, Rear, and Side Deltoids (Front, Rear, Side Delts)</td>
                    <td>Biceps, Triceps, Forearms</td>
                    <td>Lower, Upper, Inner Pectorals (Lower, Upper, Inner Chest)</td>
                    <td>Latissimus Dorsi (Lats), Lower Back, Trapezius (Traps)</td>
                    <td>Quadriceps (Quads), Hamstrings, Calves, Gluteus (Glutes)</td>
                 </tr>
             </table>
            <br>
            <h2>Examples of exercises for each muscle group</h2><br>
            <table class="muscleTable">
                <tr>
                    <th>Shoulders</th>
                    <th>Arms</th>
                    <th>Chest</th>
                    <th>Back</th>
                    <th>Legs</th>
                </tr>
                <tr>
                    <td>Swimming, Shoulder Press with Resistance Band, Deltoid Side Raises</td>
                    <td>Chin Ups, Bicep Dumbbell Curl, Tricep Extensions.</td>
                    <td>Push Ups, Wall Push Ups</td>
                    <td>Pull Ups, Knee to Chest Stretch, Shrugs</td>
                    <td>Squats, Glute Bridge, Calve Raises, Step Ups, Walking</td>
                </tr>
             </table>
                <br>
                <hr>
                <br>
            <h2>Basic Muscular Anatomy</h2><br>
            <img src="images/muscleAnatomy.jpg"><br>
            <cite>https://www.thehealthsite.com/</cite>
            <br>
            <hr>
            <br>
            <h2>Resting</h2>
            <br>
            <p>Resting is an important factor in ensuring your muscles recover. Ensure that you have adequate rest following a day of strenuous exercise to reduce fatigue.</p><br><hr><br>
            <h2>Posture</h2>
            <br>
            <p>It is important that you maintain the correct posture when standing and sitting. Poor posture can lead to gradual injuries. Therefore, 
                 ensure you reduce the risk by fixing posture, correcting bad habits, and exercising with good form.</p><br><hr><br>
            </section>
            <section class="learning">
                <br><h1>End of Section 1</h1><br>
                <p>Congratulations, you've completed section 1! You're on the way to growing your wings. Continue to section 2 below.</p><br>
                <form action="learnMaterialsSection2.php">
                    <input class="submit" type="submit" value="Section 2: Healthy Eating">
                </form>
            </section>
        </div> 
    </div>
<?php 
    echo endMain();
    echo makePageEnd();
    echo makeFooter();
?>