<?php

/**
 * @desc Function that returns number of words in given string, 
 * if it's given an non-string param function will return 0
 * @param string $string
 * @return int
 */
function wordCount($string)
{

    if (is_string($string)) {

        $string = trim($string);
        $words = strlen($string) ? 1 : 0;

        for ($i = 1; $i < strlen($string); $i++) {
            if ($string[$i] === " " && $string[$i - 1] !== " ") {
                $words++;
            }
        }
        return $words;
    } else {
        return 0;
    }
}
