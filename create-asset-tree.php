<?php
include 'php/config.php';

$conn = pg_connect($conn_string);

if(!$conn)
{
	echo "ERROR : Unable to open database";
	exit;
}

$termid = 1;
$subdomain = 2;

$q1 = "SELECT DISTINCT level1seq, level1term FROM asset_tree ORDER BY level1seq";
$res1 = pg_query($conn, $q1) or die(pg_last_error($conn));
while ($r1 = pg_fetch_array($res1))
{
	$level1seq = $r1['level1seq'];
	$level1term = $r1['level1term'];

	$nq1 = "INSERT INTO final_asset_tree (termid, groupno, grplabel, indx, term, domain, subdomain, type) VALUES ('".($termid++)."', '1','L1','$level1seq','$level1term','1','$subdomain','1')";
	pg_query($conn, $nq1) or die(pg_last_error($conn));
	
	$level2domain = $subdomain;

	$q2 = "SELECT DISTINCT level2seq, level2term FROM asset_tree WHERE level1seq='$level1seq' AND level1term='$level1term' ORDER BY level2seq";
	$res2 = pg_query($conn, $q2) or die(pg_last_error($conn));
	while ($r2 = pg_fetch_array($res2))
	{
		$level2seq = $r2['level2seq'];
		$level2term = $r2['level2term'];

		$nq2 = "INSERT INTO final_asset_tree (termid, groupno, grplabel, indx, term, domain, subdomain, type) VALUES ('".($termid++)."', '2','L2','$level2seq','$level2term','$level2domain','".($subdomain+1)."','1')";
		pg_query($conn, $nq2) or die(pg_last_error($conn));
		
		$level3domain = $subdomain+1;

		$q3 = "SELECT DISTINCT level3seq, level3term FROM asset_tree WHERE level1seq='$level1seq' AND level1term='$level1term' AND level2seq='$level2seq' AND level2term='$level2term' ORDER BY level3seq";
		$res3 = pg_query($conn, $q3) or die(pg_last_error($conn));
		while ($r3 = pg_fetch_array($res3))
		{
			$level3seq = $r3['level3seq'];
			$level3term = $r3['level3term'];

			$nq3 = "INSERT INTO final_asset_tree (termid, groupno, grplabel, indx, term, domain, subdomain, type) VALUES ('".($termid++)."', '3','L3',$level3seq,'$level3term',$level3domain,'".($subdomain+2)."','1')";
			pg_query($conn, $nq3) or die(pg_last_error($conn));

			$level4domain = $subdomain+2;

			$q4 = "SELECT DISTINCT level4seq, level4term FROM asset_tree WHERE level1seq='$level1seq' AND level1term='$level1term' AND level2seq='$level2seq' AND level2term='$level2term' AND level3seq='$level3seq' AND level3term='$level3term' ORDER BY level4seq";
			$res4 = pg_query($conn, $q4) or die(pg_last_error($conn));
			while ($r4 = pg_fetch_array($res4))
			{
				$level4seq = $r4['level4seq'];
				$level4term = $r4['level4term'];

				$nq4 = "INSERT INTO final_asset_tree (termid, groupno, grplabel, indx, term, domain, subdomain, type) VALUES ('".($termid++)."', '4','L4','$level4seq','$level4term','$level4domain','".($subdomain+3)."','1')";
				pg_query($conn, $nq4) or die(pg_last_error($conn));

				$level5domain = $subdomain+3;

				$q5 = "SELECT DISTINCT level5seq, level5term FROM asset_tree WHERE level1seq='$level1seq' AND level1term='$level1term' AND level2seq='$level2seq' AND level2term='$level2term' AND level3seq='$level3seq' AND level3term='$level3term' AND level4seq='$level4seq' AND level4term='$level4term' ORDER BY level5seq";
				$res5 = pg_query($conn, $q5) or die(pg_last_error($conn));
				while ($r5 = pg_fetch_array($res5))
				{
					$level5seq = $r5['level5seq'];
					$level5term = $r5['level5term'];

					$nq5 = "INSERT INTO final_asset_tree (termid, groupno, grplabel, indx, term, domain, subdomain, type) VALUES ('".($termid++)."', '5','L5','$level5seq','$level5term','$level5domain',null,'1')";
					pg_query($conn, $nq5) or die(pg_last_error($conn));

					$subdomain++;
				}
				
				$subdomain++;
			}
			
			$subdomain++;
		}
		
		$subdomain++;
	}
	
	$subdomain++;
}

pg_close($conn);

?>
