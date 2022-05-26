<pre>
<?php
$doc = file_get_contents('../news_data/news.txt');
$doc = "<br />2018-06-02 ニュースです";
file_put_contents('../news_data/news.txt', $doc);

readfile('../news_data/news.txt');
?>
</pre>