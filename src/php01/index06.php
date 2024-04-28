<?php

function triangle($bottom, $height, $top){
    $answer = $bottom * $height / 2;
    return $answer;
}

function square($bottom, $height,$top){
    $answer = $bottom * $height;
    return $answer;
}

function s_square($bottom, $height, $top){
    return ($top + $bottom) * $height / 2;
}

$a = triangle(2,2,3);
print $a;

$b = square(2,2,3);
print $b;

$c = s_square(4,3,2);
print $c;

