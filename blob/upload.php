<?php
/** * Copyright 2013 Microsoft Corporation
        *
        * Licensed under the Apache License, Version 2.0 (the "License");
        * you may not use this file except in compliance with the License.
        * You may obtain a copy of the License at
        * http://www.apache.org/licenses/LICENSE-2.0
        *
        * Unless required by applicable law or agreed to in writing, software
        * distributed under the License is distributed on an "AS IS" BASIS,
        * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
        * See the License for the specific language governing permissions and
        * limitations under the License.
        */
require_once 'autoload.php';
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\Common\CloudConfigurationManager;
use WindowsAzure\Blob\Models\Block;
use WindowsAzure\Blob\Models\CreateContainerOptions;
use WindowsAzure\Blob\Models\ListContainersOptions;
$chosenfilename = $argv[1];
define("CONTAINERNAME", "files");
define("BLOCKBLOBNAME", "$chosenfilename");
define("BLOCKSIZE", 4 * 1024 * 1024);    // Size of the block, modify if needed.
define("PADLENGTH", 5);                  // Size of the string used for the block ID, modify if needed.
define("FILENAME", "$chosenfilename");        // Local file to upload as a block blob.
define("ACCOUNTNAME", "slatestorage");
define("ACCOUNTKEY", "TVptRSJ4NviJ3LZbcmak2fv6sr8KLKoH4KrFGJhALbN5Yqxc76wA9gj/ylLmuJJEu12axVK3hsyJFf69j2SECg==");
function createContainerIfNotExists($blobRestProxy)
{
    // See if the container already exists.
    $listContainersOptions = new ListContainersOptions;
    $listContainersOptions->setPrefix(CONTAINERNAME);
    $listContainersResult = $blobRestProxy->listContainers($listContainersOptions);
    $containerExists = false;
    foreach ($listContainersResult->getContainers() as $container)
    {
        if ($container->getName() == CONTAINERNAME)
        {
            // The container exists.
            $containerExists = true;
            // No need to keep checking.
            break;
        }
    }
    if (!$containerExists)
    {
        echo "Creating container.\n";
        $blobRestProxy->createContainer(CONTAINERNAME);
        echo "Container '" . CONTAINERNAME . "' successfully created.\n";
    }
}
try {
    echo "Beginning processing.\n";




  $connectionString="DefaultEndpointsProtocol=http;AccountName=" . ACCOUNTNAME . ";AccountKey=" . ACCOUNTKEY;
    $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
    createContainerIfNotExists($blobRestProxy);
    echo "Using the '" . CONTAINERNAME . "' container and the '" . BLOCKBLOBNAME . "' blob.\n";
    echo "Using file '" . FILENAME . "'\n";
    if (!file_exists(FILENAME))
    {
        echo "The '" . FILENAME . "' file does not exist. Exiting program.\n";
        exit();
    }
    $handle = fopen(FILENAME, "r");
    // Upload the blob using blocks.
    $counter = 1;
    $blockIds = array();
    while (!feof($handle))
    {
        $blockId = str_pad($counter, PADLENGTH, "0", STR_PAD_LEFT);
        echo "Processing block $blockId.\n";

        $block = new Block();
        $block->setBlockId(base64_encode($blockId));
        $block->setType("Uncommitted");
        array_push($blockIds, $block);

        $data = fread($handle, BLOCKSIZE);

        // Upload the block.
        $blobRestProxy->createBlobBlock(CONTAINERNAME, BLOCKBLOBNAME, base64_encode($blockId), $data);
        $counter++;
    }
    // Done creating the blocks. Close the file and commit the blocks.
    fclose($handle);
    echo "Commiting the blocks.\n";
    $blobRestProxy->commitBlobBlocks(CONTAINERNAME, BLOCKBLOBNAME, $blockIds);

    echo "Done processing.\n";
}
catch(ServiceException $serviceException)
{
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
    echo "ServiceException encountered.\n";
    $code = $serviceException->getCode();
    $error_message = $serviceException->getMessage();
    echo "$code: $error_message";
}
catch (Exception $exception)
{
    echo "Exception encountered.\n";
    $code = $exception->getCode();
    $error_message = $exception->getMessage();
    echo "$code: $error_message";
}
?>
