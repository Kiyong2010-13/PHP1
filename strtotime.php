<pre>
<?php
for ($i = 1; $i <= 365; $i++) {
  $day = date('n/j(D)', strtotime('+' . $i . 'day'));
  print($day . "\n");
}
?>
<?php
$time = time();
print($time . "\n");
?>
<?php
$day = date('m/j(D)' , 86400);
print($day . "\n");
?>
<?php
$ieyasu = strtotime('1543/1/31');
print($ieyasu . "\n");
?>
<?php
$day_after_tomorrow = strtotime('+2day');
$day = date('n/j(D)', $day_after_tomorrow);
print($day . "\n");
?>
<?php
$one_month = strtotime('+1month');
$day2 = date('n/j(D)', $one_month);
print($day2 . "\n");
?>
<?php
$two_month = strtotime('-2month');
$day3 = date('n/j(D)' , $two_month);
print($day3 . "\n");
?>
<?php
for ($i1 = 1; $i1 <= 730; $i1++) {
  $timestamp1 = strtotime('+' . $i1 . 'day');
  $day1 = date('n/j(D)',  $timestamp1);
  print($day1 . "\n");
}
?>
</pre>