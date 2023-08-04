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
    
    if (so_numeric($a) && so_numeric($b)) {
        
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

    return str_suffle($strong);

};

echo takes("In code we trust");

?>
