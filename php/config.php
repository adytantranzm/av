<?php
	$conn_string = "host=avpgdb.postgres.database.azure.com port=5432 dbname=avd user=adminavpgdb@avpgdb password=Rohit@12345 sslmode=require options='--client_encoding=UTF8'";

	$azure_blob_path = "https://fileserverdata.blob.core.windows.net/fileserverdata2/";

	$azure_notification_hub_string = "Endpoint=sb://avnotificationhubnamespacein.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=mT7CyioAja8pl7RFFXCquJmspf6TayxcXzxE94FeVzI=";
	$azure_notification_hub_name = "avnotificationhub";

	$max_asset_tree_levels = 5;

	/*$host = "cp-ht-2.webhostbox.net";
	$port = "465";

	$emailUsername = "avsadmin@myangels.co.in";
	$emailPassword = "avsadmin@2018";
	$fromname = "contact@avapp.xyz";*/

	$host = "smtp.gmail.com";
	$port = "465";

	$emailUsername = "asset.verify@gmail.com";
	$emailPassword = "wfgprdmkiwljkdfa";
	$fromname = "Asset Verification";
?>
