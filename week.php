<pre>
<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
print('今日は、' . $week_name[date('w')] . '曜日です。' .  "\n");
?>
<?php
$week_name2 = ['日', '月',  '火', '水', '木', '金', '土'];
print($week_name2[1] . "\n");
print($week_name2[0]. "\n" );
$week = 1+3;
print($week_name2[$week]. "\n");
print('今日は、'. $week_name2[date('w')]. '曜日。気分はいかが？'. "\n");
?>
<?php
$urawa_reds = ['和', 'ッ', 'ズ', '浦', 'レ', '最高'];
print($urawa_reds[3]);
print($urawa_reds[0]);
print($urawa_reds[4]);
print($urawa_reds[1]);
print($urawa_reds[2]);
$good = 1 + 4;
print($urawa_reds[$good]);
?>
<?php
$age = ['10代以下', '20代', '30代', '40代', '50代', '60代以上'];
print($age[1]. "\n");
?>
</pre>