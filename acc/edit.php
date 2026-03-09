<?
	header("Content-type: text/html; charset=UTF-8");
	include "../inc/site.conf.php";
	include '../inc/tric.conf.php';
	include "../inc/db.inc.php";
	include "../tric/inc/tbl.conf.php";
	include "../inc/init.inc.php";
	include "../tric/class/other/account.class.php";

	$account = new Account($_DB, $_TBL);
	if(isset($_POST[submit])) {
		$account->editStatement($_POST);
	}
	if(isset($_POST[del])) {
		$account->delStatement($_POST[transaction_id]);
	}
	
	$dat = $account->listAllAccount();
	for($i=0;$i<count($dat);$i++) {
		$a_opt .= "<option value='".$dat[$i][account_id]."'>".$dat[$i][alias]." (".$dat[$i][account_id].")</option>";
	}
	$sql = "select count(transaction_id), category from ".$_TBL['statement']." where date like '2022%' and Category != '' group by category ORDER BY count(transaction_id)  DESC";
	$dat = $_DB->sqlFetchRowSet($_DB->sqlQuery($sql));
	#$dat = Array('Business','Business2','Business3', 'Business4', 'Baby', 'Homeschool', 'Home', 'Library', 'Necessary', 'Consumer', 'Snack', 'Food', 'Fruit', 'Insurance', 'Travel', 'Cash Flow', 'Fee', 'Donation', 'Book', 'Transportation', 'Medical', 'Clothing', 'Cosmetic', 'Salary', 'Lost', 'Entertainment', 'Computer', 'Telecommunication', 'Electric', 'Water', 'Pet', 'Planting', 'Freelance', 'Other');
	for($i=0;$i<count($dat);$i++) {
		$c_opt .= "<option value='".$dat[$i][1]."'>".$dat[$i][1]."</option>";
	}	
	$info = $account->getStatementInfo($_GET[id]);
?>
<? include "menu.php"; ?>
<br><br>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="th">
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>ACC INSERT</title>
</head>
<body>
<form name="form1" method="post" action="<?=$_SERVER[REQUEST_URI]?>" onsubmit="if(requireField(new Array(document.form1.category, document.form1.account, document.form1.statement), new Array('Category is required', 'Account is required', 'Amount is required'))) { return true; } else { return false; };">
<input type="hidden" name="transaction_id" value="<?=$_GET[id]?>">
Date : <input name="date" type="text" value="<?=$info[0][date]?>"><br><br>
Category : <select name="category" size="6" style="width:150px;"><?=$c_opt?></select> <br><br>
Account : <select name="account_id"  size="8" style="width:330px;"><?=$a_opt?></select><br><br>
Amount : <input type="text" name="statement" size="5" value="<?=$info[0][statement]?>"> Baht<br><br>
Detail : <textarea name="detail" cols="50" rows="6"><?=$info[0][detail]?></textarea><br><br>
<input type="submit" name="submit" value="save"> <input type="submit" name="del" value="del">
</form>
</body>
<script>
	document.form1.account_id.value = '<?=$info[0][account_id]?>';
	document.form1.category.value = '<?=$info[0][category]?>';
</script>
