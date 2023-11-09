<?php
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

//function to check the length of the word
function checkStrLength($str)
{
    if (strlen($str) > 5) {
        echo "{$str} is more than 5 characters <br>";
    } else {
        echo "{$str} is not more than 5 characters <br>";
    }
}

checkStrLength($word1);
checkStrLength($word2);
checkStrLength($word3);
echo "<br>";
?>