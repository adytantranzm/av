<?php
	$conn_string = "host=ishvnn-postgresqldbserver.postgres.database.azure.com port=5432 dbname=av user=postgresqldbuser@ishvnn-postgresqldbserver password=Rohit@12345 options='--client_encoding=UTF8'";

	$azure_blob_path = "https://ihsavstoraged02.blob.core.windows.net/fileserverdata/";

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
