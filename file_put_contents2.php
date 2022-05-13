<pre>
<?php
$success = file_put_contents('../news_data/news2.txt', '再び！');
if ($success) {
  print('ファイルへの書き込み完了したよ！');
} else {
  print('ダメでした。残念!');
}
?>
</pre>