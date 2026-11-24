<?php
$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$inizio = "Nel";
$preposizione = "del";
$frase1 = "cammin di nostra vita";
$frase2 = "una selva";
$cong = "che la";
$fine = "via";
$fine2 = "smarrita";

$result = $inizio . " " . $words1[6][3][0] . " " . $preposizione . " " . $frase1 . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $frase2 . " " . $words1[6][0] . "," . $cong . " " . $words1[7] . " " . $fine . " " . $words1[6][1]. " " . $fine2;

echo $result;
echo "\n";

?>
