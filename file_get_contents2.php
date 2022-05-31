<pre>
<?php
$doc = file_get_contents('../news_data/news.txt');
$doc = "<br />2018-06-02 ニュースです";
file_put_contents('../news_data/news.txt', $doc);

readfile('../news_data/news.txt');
?>
<?php
$doc1 = file_get_contents('../news_data/news.txt');
$doc1 = "<br />2020-06-16 コロナ禍でも元気にやってるよ";
file_put_contents('../news_data/news.txt', $doc1);

readfile('../news_data/news.txt');
?>

<?php
$doc2 = file_get_contents('../news_data/news.txt');
$doc2 = "<br />2022-06-01 なんだか憂鬱だけど、頑張れ";
file_put_contents('../news_data/news.txt', $doc2);

readfile('../news_data/news.txt');
?>
</pre>