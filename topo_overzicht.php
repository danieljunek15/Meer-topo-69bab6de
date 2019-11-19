<?php
echo "> Ik heb een ULTRA moeilijke topo test voor jouw gemaakt.".PHP_EOL;
echo "> Be prepared!!!!".PHP_EOL;

$goed = 0;

$fout = 0;

$check = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

foreach ($check as $question => $answer) {
    echo "> Wat is de hooftstad van $question ?".PHP_EOL;
    $input = readline("> ");
    if ($input === $answer ){
        echo "> yheeee goed.".PHP_EOL;
        $goed++;
    }
    else{
        echo "> OOF FOUT BOOMER".PHP_EOL;
        $fout++;
    }
}

echo "> zoveel antwoorden waren goed " . $goed . ", boomer!".PHP_EOL;
echo "> Zoveel antwoorden waren fout " . $fout . ", Boomer!".PHP_EOL;

echo "> Jow BOOMER omdat je zo goed bent in topo mag je nu meer landen met hooftsteden toevoegen".PHP_EOL;
echo "> press enter to progres".PHP_EOL;
readline();
echo "> OK BOOMER hoeveel landen wil je pasen?".PHP_EOL;
$nummer = readline("> ");

for ($i=1; $i <= $nummer; $i++) { 
echo "> OK BOOMER geef nu je swager land.".PHP_EOL;
$toegevoegdLand = readline("> ");
echo "> OK BOOMER je hebt $toegevoegdLand toegevoegt gooi is die hooftstad dan.".PHP_EOL;
$toegevoegdHoofdstad = readline("> "); 
$check[$toegevoegdLand] = $toegevoegdHoofdstad;
}

if (!is_numeric($nummer)) {
    exit("> OOF BOOMER je hebt het voor elkaar gekreegen om deze simpele vraag up te fucken je had een taak een fucking nummer in te typen en wat doe je alles behalve dat
     doe maar overnieuw.");
}

$startPoint = 10;

foreach($check as $toegevoegdLand => $toegevoegdHoofdstad){
    if($startPoint <= 0){
        echo "> BOOMER je hebt $toegevoegdLand toegevoegt met als hooftstad $toegevoegdHoofdstad.".PHP_EOL;
    }
    $startPoint--;
}