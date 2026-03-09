<?php

	header("Content-type: text/html; charset=UTF-8");
	include "../inc/site.conf.php";
	include '../inc/tric.conf.php';
	include "../inc/db.inc.php";
	include "../tric/inc/tbl.conf.php";
	include "../inc/init.inc.php";
	include "../tric/class/other/account.class.php";

  
	$dol = 35;
	#$_MYDB = new Mysql_Lib('account');
	#$_MYDB->sqlQuery("set names utf8 collate utf8_unicode_ci;");
	$account = new Account($_DB, $_TBL);
	
	empty($_GET[year]) ? $_GET[year] = date('Y') : 1;
	
	$dat = $account->listAllAccount('detail');
	
	for($i=0; $i<count($dat); $i++) {
	
		$rev = $account->getRevenueByAccount($dat[$i][account_id]);
		$exp = $account->getExpenseByAccount($dat[$i][account_id]);
		$bal = $account->getBalanceByAccount($dat[$i][account_id]);
		
		if($dat[$i][account_id] == "PAYPAL") {
			#$rev = $rev*$dol;
			#$exp = $exp*$dol;
			#$bal_dol = $bal;
			#$bal = $bal*$dol;
		}
		else
			$bal_dol = "";
		
	   $acc_row .= "<tr>
					<td>".$dat[$i][detail]." <b>(".$dat[$i][account_id].")</b></td>
			      <td>".number_format($rev, 2)."</td>
			      <td>".number_format($exp, 2)."</td>
			      <td><a href=\"bal_detail.php?year=$_GET[year]&account_id=".$dat[$i][account_id]."\">".number_format($bal, 2)." $bal_dol</a></td>
			    </tr>";
		$bal_sum += $bal;
	}
	$acc_row .= "<tr style='font-weight: bold;'>
					<td>Total</td>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			      <td><a href=\"bal_detail.php?year=$_GET[year]\">".number_format($bal_sum, 2)."</td>
			    </tr>";
	
	for($i=1; $i<=12; $i++) {
		$rev_row .= "<tr>
					<td><b>Month $i Year $_GET[year]</b></td>
					<td>&nbsp;</td>
				</tr>";
		$list = $account->listGroupRevenueByMonth($i, $_GET[year], "sum_statement");
		$sum = 0;
		for($j=0; $j<count($list); $j++) {
			$rev_row .= "<tr>
						<td><a href=cat_detail.php?year=$_GET[year]&cat=".$list[$j][category].">".$list[$j][category]."</a></td>
						<td><a href='detail.php?cat=".$list[$j][category]."&i=$i&year=$_GET[year]&list=Revenue'>".number_format($list[$j][sum_statement], 2)."</a></td>
					</tr>";
			$sum += $list[$j][sum_statement];
		}
		$rev_row .= "<tr>
				<td><b>Total</b></td>
				<td><b><a href='detail.php?cat=".$list[$j][category]."&i=$i&year=$_GET[year]&list=Revenue'>".number_format($sum, 2)."</a></b></td>
			</tr>
			<tr>
				<td colspan='2'>&nbsp;</td>
			</tr>";
		
		//Exp row
		$exp_row .= "<tr>
					<td><b>Month $i Year $_GET[year]</b></td>
					<td>&nbsp;</td>
				</tr>";
		$list = $account->listGroupExpenseByMonth($i, $_GET[year], "sum_statement");
		$sum = 0;
		for($j=0; $j<count($list); $j++) {
			$exp_row .= "<tr>
						<td><a href=cat_detail.php?year=$_GET[year]&cat=".$list[$j][category].">".$list[$j][category]."</a></td>
						<td><a href='detail.php?cat=".$list[$j][category]."&i=$i&year=$_GET[year]&list=Expense'>".number_format($list[$j][sum_statement], 2)."</a></td>
					</tr>";
			$sum += $list[$j][sum_statement];
		}
		$exp_row .= "<tr>
				<td><b>Total</b></td>
				<td><b><a href='detail.php?cat=".$list[$j][category]."&i=$i&year=$_GET[year]&list=Expense'>".number_format($sum, 2)."</a></b></td>
			</tr>
			<tr>
				<td colspan='2'>&nbsp;</td>
			</tr>";
	}
?>
<? include "menu.php"; ?>
<br><br>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="th">
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>ACC</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="2" width="100%">
  <tbody>
    <tr style="font-weight: bold;">
      <td>Account Summary</td>
      <td>รายรับ (Revenue)</td>
      <td>รายจ่าย (Expense)</td>
      <td>คงเหลือ (Balance)</td>
    </tr>
		<?=$acc_row?>
  </tbody>
</table>
<br>

<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td valign="top" width="50%">
			<table cellpadding="2" cellspacing="2" border="1" width="100%">
				<tr>
					<td><b>Revenue Summary</b></td>
					<td>&nbsp;</td>
				</tr>
				<?=$rev_row?>
			</table>
		</td>
		<td width="50%">
			<table cellpadding="2" cellspacing="2" border="1" width="100%">
				<tr>
					<td><b>Expense Summary</b></td>
					<td>&nbsp;</td>
				</tr>
				<?=$exp_row?>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
