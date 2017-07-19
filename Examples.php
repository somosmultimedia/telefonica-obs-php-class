
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

   	if(!class_exists('OBS'))require_once('OBS.php');
   	$obs = new OBS('Access-Key-Id', 'Secret-Access-Key');
	$bucket = "myBucket";

	$metaHeaders = array();
    $headers = array( // Custom $requestHeaders
        "Cache-Control" => "max-age=15, must-revalidate",
        "Content-Type" => "image/jpeg"
    );
    

	
	//echo ($obs->putObjectFile($file, $bucket, $uri, OBS::ACL_PUBLIC_READ, $metaHeaders, $headers)) ? "putObjectFile - Success!" : "putObjectFile - Error!";

	//echo ($obs->putObjectString('Hello World!', $bucket, 'prueba.json', OBS::ACL_PUBLIC_READ, $metaHeaders, $headers)) ? "putObjectString - Success!" : "putObjectString - Error!";
	
	//echo ($obs->deleteObject($bucket, $uri2)) ? "deleteObject - Success!" : "deleteObject - Error!";

	//echo ($obs->putBucket($bucket, OBS::ACL_PRIVATE)) ? "putBucket - Success!" : "putBucket - Error!";

    //echo ($obs->deleteBucket($bucket)) ? "deleteBucket - Success!" : "deleteBucket - Error!";

    //echo ($obs->getObject($bucket, $uri, $saveTo)) ? "getObject - Success!" : "getObject - Error!";
    
	//($data = $obs->getObjectInfo($bucket, $uri)) ? "getObjectInfo - Success!" : "getObjectInfo - Error!";
    //var_dump($data);

    //echo ($obs->copyObject($bucket, $uri, $bucket, $uri2, OBS::ACL_PUBLIC_READ, $metaHeaders, $headers)) ? "copyObject - Success!" : "copyObject - Error!";
	
	//echo ($obs->setBucketRedirect($bucket, 'www.somos.mx')) ? "setBucketRedirect - Success!" : "setBucketRedirect - Error!";

    //echo ($obs->setBucketLogging($bucket, $bucket, 'logs')) ? "setBucketRedirect - Success!" : "setBucketRedirect - Error!";

    //($data = $obs->getBucketLogging($bucket)) ? "getBucketLogging - Success!" : "getBucketLogging - Error!";
    //var_dump($data);

    //echo ($obs->disableBucketLogging($bucket)) ? "disableBucketLogging - Success!" : "disableBucketLogging - Error!";

    //POR REVISAR ESTE METODO
    //($data = $obs->getBucketLocation('blaulife-chile')) ? "getBucketLocation - Success!" : "getBucketLocation - Error!";
    //var_dump($data);

    var_dump($obs->listBuckets(true));



    //echo () ? " - Success!" : " - Error!";

?>
