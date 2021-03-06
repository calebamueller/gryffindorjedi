<?php

require_once 'autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
define("ACCOUNTNAME", "slatestorage");
define("ACCOUNTKEY","TVptRSJ4NviJ3LZbcmak2fv6sr8KLKoH4KrFGJhALbN5Yqxc76wA9gj/ylLmuJJEu12axVK3hsyJFf69j2SECg==");
 $connectionString="DefaultEndpointsProtocol=http;AccountName=" . ACCOUNTNAME . ";AccountKey=" . ACCOUNTKEY;
// Create blob REST proxy.
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);


try {
    // List blobs.
    $blob_list = $blobRestProxy->listBlobs("files");
    $blobs = $blob_list->getBlobs();

    foreach($blobs as $blob)
    {
        echo $blob->getName().": ".$blob->getUrl()."<br />";
    }
}
catch(ServiceException $e){
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/library/azure/dd179439.aspx
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}
?>
