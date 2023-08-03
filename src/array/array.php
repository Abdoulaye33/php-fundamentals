<?php
$me = array(
    'age' => 19,
    'firstname' => 'Abdoulaye',
    'lastname' => 'Bayo',
    'hobbies' => array('Reading', 'Programming')
);

$mother = array(
    'age' => 38,
    'firstname' => 'Aissatou',
    'lastname' => 'Bayo',
    'hobbies' => array('Cooking', 'Reading')
);

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';
?>
