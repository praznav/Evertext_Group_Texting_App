<?php

function checkMsg($message, $parse) {

    if (strpos($message, $parse) !== FALSE)
    return true;
    else
    return false;
}

function removeChunk($message, $keyword) {
    $index = strpos($keyword." ");
    $editted = str_replace($keyword.'',$message);
    return $editted;
}

// Add this to whichever php script you need this function in - require(__DIR__.DIRECTORY_SEPARATOR."parser_help.php")
?>