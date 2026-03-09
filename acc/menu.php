<form action="./search.php" method="post">
Search <input type="text" name="keyword" value="<?=$_POST[keyword]?>">
</form>
<link href="./style.css" rel="stylesheet" type="text/css">
<?php
	for($i=2005;$i<=date('Y');$i++)
		echo '<a href="./?year='.$i.'">'.$i.'</a> | ';
?>
<a href="insert.php">กรอก transaction</a> | <a href="sum_cat.php?year=<?=$_GET[year]?>">Summary By Category</a>
