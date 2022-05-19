<pre>
<?php
$success = file_put_contents('../news_data/news2.txt', '再び！');
if ($success) {
  print('ファイルへの書き込み完了したよ！');
} else {
  print('ダメでした。残念!');
}
?>
<?php
$success1 = file_put_contents('../news_data/news3.txt', 'do!');
if ($success1) {
  print('実験成功！');
} else {
  print('失敗！');
}
?>

</pre>