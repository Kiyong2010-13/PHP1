<pre>
<?php
$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
print($date . "\n");
?>
<?php
$date2 = sprintf('%06d組', 1);
print($date2 . "\n");
?>
<?php
$date3 = sprintf('%07d代目 %sマン', 43333314, 'アンパン');
print($date3 . "\n");
?>
</pre>