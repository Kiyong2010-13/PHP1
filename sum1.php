<pre>
<?php
print(100 + 1050 + 200);
print("\n");
print(100 + 1050 + 200 * 1.08);
print("\n");
print(100 + 1050 + 200 + 50);
print("\n");
print((100 + 1050 + 200 + 50) * 1.08);
?><br>
<?php
$sum = 100+1050+200+50;
$tax = 1.08;
?>
合計金額は: <?php print($sum * $tax); ?>円です<br>
<?php
$sum1 = 8 + 2;
?>
正解は: <?php print($sum1); ?>
</pre>