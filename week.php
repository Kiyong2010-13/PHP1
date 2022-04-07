<pre>
<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
print('今日は、' . $week_name[date('w')] . '曜日です。');
?>
<?php
$week_name2 = ['日', '月', ,'火', '水', '木', '金', '土'];
print($week_name2[1]);
?>
</pre>