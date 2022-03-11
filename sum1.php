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
?>
合計金額は: <?php print($sum); ?>円です<br>
税込金額は: <?php print($sum *1.08); ?>円です
</pre>