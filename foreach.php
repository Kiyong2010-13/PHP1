<pre>
<?php
$furits = [
  'apple' => 'りんご',
  'grape' => 'ぶどう',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'もも',
];

foreach ($furits as $english => $japanese) {
  print($english . ':' . $japanese . "\n");
}
?>
<?php
$furits2 = ['りんご', 'ぶどう', 'レモン', 'トマト', 'もも'];
print ($furits2[2] . "\n");
?>
<?php
$fruits3 = [
  'apple' => 'りんご',
  'greap' => 'ぶどう',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'もも', 
];
print($fruits3['lemon']. "\n");
?>
<?php
$fruits4 = [
  'apple' => 'りんご',
  'greap' => 'ぶどう',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'もも',
];
foreach ($fruits4 as $english => $japanese){
  print ($english . ':' . $japanese . "\n");
}
?>
<?php
$os = [
  'win' => 'Windows',
  'mac' => 'Macintosh',
  'iphone' => 'iPhone',
  'ipad' => 'iPad',
  'android' => 'Android',
];
foreach ($os as $english => $fullname){
  print ($english . ':' . $fullname . "\n");
} 
?>
</pre>