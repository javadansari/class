<?php
/**
 * Created by PhpStorm.
 * User: Javad Ansari
 * Date: 7/30/2018
 * Time: 6:45 PM
 */
$friends = array(
    "name" => "javad",
    "family" => "ansari",
    "age" => 30,
    "married" => true


);


//echo $friends['family'];

echo "<br>";

$brother = array(
    "name" => "mohammad",
    "family" => "jafary",
    "age" => 25,
    "school" => "danesh",
    "friends" => array(
        "first friend" =>"javad",
        "second friend" => "ali",
        "third friend" =>"hassan"
    ),
    "student" => array(
    "first friend" =>"shahin",
    "second friend" => "pardis",
    "third friend" =>"mahan"
)

);

foreach ($brother as $key => $value) {
   // if($key != "friends")
    if(is_array($value))
     {
        echo "$key  ====> </br> ";
        echo "<table border='1'>";
        foreach ($brother['friends'] as $friend_key => $friend_value) {
            echo "<tr style='background-color: aqua'><td>$friend_key </td> <td>$friend_value</td></tr>";

        }
        echo "</table>";
    }
    else
    echo "$key = $value</br>";
}
