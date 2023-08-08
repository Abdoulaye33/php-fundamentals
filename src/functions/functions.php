<?php

function capitalizeFirst($nameEmilie) {
    return ucfirst($nameEmilie);
}
echo capitalizeFirst("émilie");


$currentYear = date("Y");
echo "Current year is: $currentYear";

echo '<br>';
 $currentDateTime = date("l  jS h:i:s A");
    echo "Current date, time, minutes and seconds : $currentDateTime";



function Sum($a, $b) {
    
    if (is_numeric($a) && is_numeric($b)) {
        
    return $a + $b;

    } else {

        echo "Error: argument is the not a number.";

    };
};

echo '<br>';
echo "Sum of 1 and 2 is: " . Sum(1, 2);

echo '<br>';
echo "Sum of 'a' and 2 is: " . Sum('a', 2);


function takes($strong) { 

    return str_shuffle($strong);

};

echo '<br>';
echo takes("In code we trust");

function replaceAE($input) {
    return str_replace(['a', 'e'], 'æ', $input);
}

echo replaceAE("caecotrophie"); 
echo replaceAE("chaenichthys"); 
echo replaceAE("microsphaera"); 


function replaceAEInverse($input) {
    return str_replace('æ', 'ae', $input);
}

echo replaceAEInverse("cæcotrophie"); 
echo replaceAEInverse("chænichthys"); 
echo replaceAEInverse("microsphæra"); 
echo replaceAEInverse("sphærotheca"); 

function feedback($message, $cssClass = "info") {
    return "<div class=\"$cssClass\">$cssClass: $message.</div>";
}

echo feedback("Incorrect email address", "error"); 


function generateRandomWord($minLength, $maxLength) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $length = rand($minLength, $maxLength);
    $word = '';
    
    for ($i = 0; $i < $length; $i++) {
        $word .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $word;
}

$word1 = generateRandomWord(1, 5);
$word2 = generateRandomWord(7, 15);

echo "<h1>Generate a new word</h1>";
echo "<p>$word1</p>";
echo "<p>$word2</p>";
echo '<button>Generate</button>';


$string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo strtolower($string); 


function calculate_cone_volume($ray, $height) {
    $volume = $ray * $ray * 3.14 * $height * (1/3);
    return $volume;
}

$volume1 = calculate_cone_volume(5, 2);
$volume2 = calculate_cone_volume(3, 4);

echo "The volume of a cone which ray is 5 and height is 2 = $volume1 cm<sup>3</sup><br />";
echo "The volume of a cone which ray is 3 and height is 4 = $volume2 cm<sup>3</sup><br />";


?>
