<?php
// != Not Equal To
// !== Not identical To

$age = 26;
// if($age >= 18) {
//     echo "You are ${age}, you are old enough to vote!";
// } else {
//     echo "Sorry, you are only ${age} so you are not old enough to vote";
// };

//Takes hour throughout the day!
$t = date("H");
echo $t;
if($t < 12) {
    echo "Good Morning!";
} elseif($t < 17) {
    echo "Good Afternoon!";
} else {
    echo "Good Evening!";
}

$posts = ['First Post'];

// if(!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo "Empty! :(";
// }
$firstPost = !empty($posts) ? $posts[0] : "No Posts! :(";
$secondPost = $posts[0] ?? null;

echo $firstPost;
echo $secondPost; //Both say "First Post"


$favColor = "Red";
switch($favColor) {
    case "Red":
        echo "Your favourite color is Red!";
        break;
    case "Blue":
        echo "Your favourite color is Blue!";
        break;
    default:
        echo "Your favourite color is Not Red OR Blue!!";
}
?>