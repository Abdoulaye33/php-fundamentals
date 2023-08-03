<?php

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    if ($pronoun === 'He/She') {
        $verb = 'codes';
    } else {
        $verb = 'code';
    }

    echo "$pronoun $verb<br>";
}

$amount_of_lines = 1;

while ($amount_of_lines <= 10)
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    $amount_of_lines ++; 
}

$num = "1";
while ($num <= 120) {
    echo $num . '\n';
    $num ++;
}


for ($num = 1; $num <= 100; $num ++) {
    echo $num;
}

$names = array(
    "Jérôme",
    "Adeline",
    "Camille",
    "Cedric",
    "Ilias",
    "Jason",
    "Manon",
    "Nathan",
    "Marius",
    "Pauline",
    "Rui",
    "Sam",
    "Steeve",
    "Tim",
    "Youssef",
    "Corentin",
    "Sarah",
    "Clara",
    "Lucie",
    "Abdoulaye",
    "Nicolas",
    "Pietro",
    "Robin"
);

echo '<select name="startnames">';

foreach ($names as $startnames) {
    echo '<option value="' . $startnames . '">' . $startnames .'</option>';
}

echo '</select>';

$countries = array(
    "none" => "Select a Country",
    "AL" => "Albania",
    "AD" => "Andorra",
    "AM" => "Armenia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BA" => "Bosnia and Herzegovina",
    "BG" => "Bulgaria",
    "HR" => "Croatia",
    "CY" => "Cyprus",
    "CZ" => "Czechia",
    "DK" => "Denmark",
    "EE" => "Estonia",
    "FI" => "Finland",
    "FR" => "France",
    "GE" => "Geoorgia",
    "DE" => "Germany",
    "GR" => "Greece",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IE" => "Ireland",
    "IT" => "Italy",
    "KZ" => "Kazakhstan",
    "LV" => "Latvia",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MT" => "Malta",
    "MD" => "Moldova",
    "MC" => "Monaco",
    "ME" => "Montenegro",
    "NL" => "Netherlands",
    "MK" => "North Macedonia",
    "NO" => "Norway",
    "PL" => "Poland",
    "PT" => "Portugal",
    "RO" => "Romania",
    "RU" => "Russia",
    "SM" => "San Marino",
    "RS" => "Serbia",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "ES" => "Spain",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "TR" => "Turkey",
    "UA" => "Ukraine",
    "UK" => "United Kingdom",
    "VA" => "Vatican City"
);

echo '<select name="" id="">';
    foreach ($countries as $iseCode => $countrys) {
        echo '<option value="' . $iseCode . '">' . $countrys . '</option>';
    }
echo '</select>';

?>
