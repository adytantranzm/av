<?php

$start_visitsid = 445;

$start_jobinfoid = 68;
$end_jobinfoid = 69;

echo '"visitsid","jobinfoid","visittype","visittypedesc","ismandatory","termid1","termid2","termid3","termid4","termid5,"termid6"';
echo "<br/>";

for ($i=$start_jobinfoid; $i<=$end_jobinfoid; $i++)
{

	echo "('".($start_visitsid++) . "','$i',1,'Brand(Other)','0','0','0','0','0','0','0'".")";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','1','\"Type,Capcty(Other)\"','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','1','Othr Detail(Other)','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','1','RT/PS','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','1','Gen Notes','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','2','Serial','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','2','Model','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','2','Barcode','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','3','Asset Image','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','5','Status','0','0','0','0','0','0','0'"."),";
	echo "<br/>";
	echo "('".($start_visitsid++) . "','$i','5','Condition','0','0','0','0','0','0','0'"."),";
	echo "<br/>";

}

?>
