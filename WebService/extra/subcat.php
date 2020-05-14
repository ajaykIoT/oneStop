<?php
	
	$dbObj=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("onestop" , $dbObj);
	$catid = $_GET['catid'];
	$sql=mysql_query("SELECT * FROM subcategories WHERE catId='$catid'");
	while ($row=mysql_fetch_array($sql)){
		$sc1=$row['sc1'];
		$sc2=$row['sc2'];
		$sc3=$row['sc3'];
		$sc4=$row['sc4'];
		$sc5=$row['sc5'];
		$sc6=$row['sc6'];
		$sc7=$row['sc7'];
		$sc8=$row['sc8'];
		$sc9=$row['sc9'];
		$sc10=$row['sc10'];
		$sc11=$row['sc11'];
		$sc12=$row['sc12'];
		$sc13=$row['sc13'];
		$sc14=$row['sc14'];
		$sc15=$row['sc15'];
		$ar2=array($catid,$sc1,$sc2,$sc3,$sc4,$sc5,$sc6,$sc7,$sc8,$sc9,$sc10,$sc11,$sc12,$sc13,$sc14,$sc15);
	}
	echo stripslashes(json_encode($ar2));

?>