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
  print('xには文字が入っています');
}
?>
</pre>