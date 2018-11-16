<?php

$start_jobdropdownid = 622;

$start_jobinfoid = 68;
$end_jobinfoid = 69;

echo '"jobdropdownid","jobinfoid","indx","category","term"';
echo "<br/>";

for ($i=$start_jobinfoid; $i<=$end_jobinfoid; $i++)
{

	echo "('".($start_jobdropdownid++) . "'','$i','1','1','Operating'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','2','1','Idle'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','1','2','Good'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','2','2','Fair'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','3','2','Average'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','4','2','Poor'),";
	echo "<br/>";
	echo "('".($start_jobdropdownid++) . "','$i','5','2','Bad'),";
	echo "<br/>";

}

?>
