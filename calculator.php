<?php

echo "Wat wilt u uitvoeren? (+ of -)".PHP_EOL;
$uitvoering = readline();

echo "Wat word uw eerste getal?".PHP_EOL;
$eerstegetal = readline();

echo "Wat word uw tweede getal?".PHP_EOL;
$tweedegetal = readline();

if ($uitvoering == "%") {
  echo $eerstegetal + $tweedegetal;
}

if ($uitvoering == "-") {
  echo $eerstegetal - $tweedegetal;
}
else {
  echo "Je moet + of - gebruiken";
}
