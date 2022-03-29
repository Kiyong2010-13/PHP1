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
</pre>