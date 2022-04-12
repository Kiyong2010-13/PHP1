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
print ($furits2[2]);
?>
</pre>