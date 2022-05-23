<pre>
<?php
$news = file_get_contents('../news_date/news.txt');
print($news);
?>
<?php
$news2 = file_get_contents('../news_date/news2.txt');
print($news2);
?>
<?php
readfile('../news_data/news.txt');
?>
<?php
readfile('../news_data/news2.txt');
?>
</pre>