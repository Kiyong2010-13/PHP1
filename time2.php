<pre>
<?php
$today = new DateTime('Asia/Tokyo');
print('現在は' . $today->format('G:i:s') . 'です');
print("\n");
$today = new DateTime('Asia/Amman');
print('現在は' . $today->format('G:i:s') . 'です');
?>
</pre>