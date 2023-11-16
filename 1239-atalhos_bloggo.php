<?php

function replaceAll($sentence, $simbol, $openTag, $closeTag)
{
    $opened = false;

    do {
        $replacement = $opened? $closeTag : $openTag;
        $pos = strpos($sentence, $simbol);

        if($pos !== false) {
            $sentence = substr_replace($sentence, $replacement, $pos, strlen($simbol));
            $opened = !$opened;
        }
        
    } while ($pos !== false);
    

    return $sentence;
}


while ($sentence = readline()) {
    $sentence = replaceAll($sentence, '_', '<i>', '</i>');
    $sentence = replaceAll($sentence, '*', '<b>', '</b>');
    echo $sentence . PHP_EOL;
}

?>
