
<?php 
/**************************************
 * PHP Build-in Array Functions bellow : 
***************************************/

/**
 * Create a indexed array
 * Create an associative array
 * Create a multidimensional array
**/

/*******************************************************
 * indexed array
*******************************************************/ 
$numbers = [2,3,4,5,6,7,8,9,10];
$verbs  = ['zone','zigzag','wrap','worship','witness'];
# to print all items
print_r($numbers);
var_dump($verbs);
var_export($numbers);
echo "\n";
# to get type of an array
echo gettype($numbers)."\n";
# to get single item from an array
echo $numbers[0]."\n";
# to get total item from an array
echo count($numbers)."\n";
# to get last item from an array
echo $numbers[count($numbers)-1]."\n";
# to add new item
$verbs[5] = "wake";
# to get all items from an array
for($i=0; $i<count($numbers); $i++) {
  echo $numbers[$i]." ";
}
echo PHP_EOL;
# to get all items by using foreach loop
foreach($verbs as $key => $verb) {
  echo $verb." ";
}
echo PHP_EOL;
# to get even numbers from an array
foreach($numbers as $num) {
  if ($num % 2 == 0) {
    echo $num." ";
  }
}
echo "\n";

/*******************************************************
 * associative array
*******************************************************/ 

$tenses = [
  'will' => 'willed',
  'win'  => 'won',
  'wipe' => 'wiped',
  'wish' => 'wish',
  'wither' => 'withered'
];

# to get single item by using key
echo $tenses['will']."\n";
# to get last item from an associative array
echo $tenses['wither']."\n";
# to get all items by using foreach
foreach($tenses as $tenseKey => $tenseVal) {
  printf("Present : %s & Past : %s\n",$tenseKey,$tenseVal);
}
# to add new tense
$tenses['wash'] = "washed";
$tenses['wish'] = 'wished';
print_r($tenses);

/*******************************************************
 * multidimensional array
*******************************************************/ 
$tenseMore = [
  ['vote' => 'voted','work' => 'worked'],
  ['weep' => 'wept', 'wander' => 'wandered'],
  ['warn' => 'warned', 'warm' => 'warmed']
];

# to get single item from an multi-dimensional array
printf("Today, I have %s around the field\n",$tenseMore[1]['wander']);
# to get some items from an array
foreach( $tenseMore[0] as $key => $val ) {
  printf("Present: %s & Past-participle: %s\n",$key,$val);
}

# to print all items from a multi-dimensional array
$total = count($tenseMore);
for ($i=0; $i<$total; $i++) {
  foreach($tenseMore[$i] as $key => $val) {
    printf("%s => %s\n",$key,$val);
  }
}


$person = [
  'Alamin' => [
    'ssc' => 2029,
    'jsc' => 2017,
    'psc' => 2013
  ],
  'Rejaul' => [
    'ssc' => 2014,
    'jsc' => 2012,
    'psc' => 2009
  ]
];
$alamin_keys = array_keys($person['Alamin']);
printf("I have passed %s in %s\n",strtoupper($alamin_keys[0]),$person['Alamin']['ssc']);

$rejaul_keys = array_keys($person['Rejaul']);


printf("Rejaul has passed %s in %s\n",strtoupper($rejaul_keys[0]),$person['Rejaul'][$rejaul_keys[0]]);

# to get informaton from multi array
echo "\nAlamin Education Qualifications:\n";
foreach($person['Alamin'] as $key=>$val) {
  echo "$key => $val\n";
}

# to get information from multli array
echo "\nRejaul Education Qualifications:\n";
foreach($person['Rejaul'] as $qname=>$pyear) {
  echo "$qname => $pyear\n";
}

echo "\nAll Information\n";
echo "-------------------\n";
# to get all information from multidimensional array
foreach($person as $name => $values) {
  echo "$name Infromations:\n";
  foreach($values as $qname => $qyear) {
    printf("%s => %s\n",$qname,$pyear);
  }
}

