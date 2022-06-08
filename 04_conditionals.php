<?php
/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

$age = 20;
$posts = ['First post', 'Second post', 'Third post'];
$t = date("H");
$favColour = 'red';

if($age >= 18) {
    echo "You are old enough to vote! <br>";
    } else {
    echo "You are not old enough to vote! <br>";
}

if($t < 12){
    echo "Good morning! <br>";
} elseif ($t >= 12 && $t < 18) {
    echo "Good afternoon! <br>";
} else {
    echo "Good evening! <br>";
}


function printPosts(){
    global $posts;
    if(!empty($posts)) {
        foreach($posts as $post) {
            echo $post . '<br>';
        }
    } else{
        echo 'No posts yet! <br>';
    }
}

echo !empty($posts) ? printPosts(): 'No posts yet! <br>';

switch($favColour){
    case 'red':
        echo 'Your favourite colour is red! <br>';
        break;
    case 'blue':
        echo 'Your favourite colour is blue! <br>';
        break;
    case 'green':
        echo 'Your favourite colour is green! <br>';
        break;
    default: 
        echo 'Your favourite colour is not red, blue or green! <br>';
}
?>