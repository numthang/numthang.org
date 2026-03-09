<?
	header("Content-type: text/html; charset=UTF-8");
	include "../inc/site.conf.php";
	include '../inc/tric.conf.php';
	include "../inc/db.inc.php";
	include "../tric/inc/tbl.conf.php";
	include "../inc/init.inc.php";
	include "../tric/class/other/account.class.php";
 	include "menu.php";

	$account = new Account($_DB, $_TBL);
	
	for($i=2005;$i<=date('Y');$i++) {
		$dat = $account->summaryByCategory($i);
		for($j=0; $j<count($dat); $j++)
			$row[$i] .= "<b><a href=cat_detail.php?year=$i&cat=".$dat[$j][category].">".$dat[$j][category]."</a></b> = ".number_format($dat[$j]['sum(statement)'], 2)."<br>";
	}
	for($i=2005;$i<=date('Y');$i++)
		$display .= '<div style="width :220px;height:700px; float:left;border:1px solid;"><b>'.$i.'</b>: <br>'.$row[$i].'</div>';
	echo '<br style="clear:both;">'.$display;
?>
