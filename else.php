<pre>
<?php
if (date('G') < 9) {
  print('※現在受付時間外です' . "\n");
} else {
  print('ようこそ'. "\n");
}
?>
<?php
$x = 'あいうえお';
if ($x) {
  print('xには文字が入っています'. "\n");
}
?>
<?php
$x1 = 0;
if (!$x1) {
  print('x1は0です' . "\n");
}
?>
<?php
$a = 1;
if ($a) {
  print('aは1です!'. "\n");
}
?>
<?php
$answer = 0;
if ($answer == 0) {
  print('1以上の数字を指定してください');
}
?>
<?php
$answer1 = 1;
if ($answer1 == 1) {
  print ('2以上の数字を指定してください');
}
?>
</pre>