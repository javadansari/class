<?php
/**
 * Created by PhpStorm.
 * User: Javad Ansari
 * Date: 7/30/2018
 * Time: 5:29 PM
 */


$names = array("javad","mohammad","ali","hamid","hassan","naser","karim","sara","zahra");
$family = array("javadi","mohammadi","ansari","hamidi","hassani","naseri","karimi","saraei","zaheri");



echo "<table border='1'>";
$count = 1;
foreach ($names as $name){

    if ($count % 3 == 0)
    $color = "green";
    elseif ($count % 2 == 0)
    $color = "red";
    else
    $color = "orange";
    echo "<tr style='background-color: $color'><td>$count</td><td> My name is : $name </td><td>Your family name is : " . $family[$count-1] .  "</td></tr>";
    $count++;

}

echo "</table>";