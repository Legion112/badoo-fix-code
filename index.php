<?php

function shortWord(string $text, int $maxLength, string $ending = '...'){
    if (mb_strlen($text) < $maxLength) {
        return $text;
    }
    $words = explode(' ', $text);

    $output = '';
    foreach ($words as $word) {
        if (mb_strlen($output) + mb_strlen($word) > $maxLength) {
            break;
        }
        $output .= " $word";
    }
    $output = trim($output);
    $output .= $ending;


    return $output;
}


var_dump(shortWord('a b c', 3));
var_dump(shortWord('1 22 333 4444', 8));
var_dump(shortWord('Hello world!', 7));