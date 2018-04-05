<html>
<body>

<?php 
require('vendor/autoload.php');
// this will simply read AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY from env vars

use Aws\S3\S3Client;

// Instantiate the client.
$s3 = S3Client::factory();

$bucket = 'collect-fydp2';
					
// Use the high-level iterators (returns ALL of your objects).
$objects = $s3->getIterator('ListObjects', array('Bucket' => $bucket));


echo  "<img src=\"https://memegenerator.net/img/instances/300x300/55013383/bruhh.jpg\" style=\"width:75%\">";


echo "Keys retrieved!\n";
foreach ($objects as $object) {
    echo $object['Key'] . "\n";
}

$keyname = "img01.png";

try {

    // Get the object
    $result = $s3->getObject(array(
        'Bucket' => $bucket,
        'Key'    => $keyname
    ));

    // Display the object in the browser
    //header("Content-Type: {$result['ContentType']}");
    header("Content-Type: image/jpeg");
    echo $result['Body'];

} 
catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}

?>











/*
$s3 = Aws\S3\S3Client::factory('key' => 'AKIAIWQ7IUWILGRYWSGA', 'secret' => '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');
$bucket = getenv('S3_BUCKET')?: die('No "S3_BUCKET" config var in found in env!');

$response = $s3 -> getListObjectsIterator(array('Bucket' => $bucket, 'Prefix' => 'files/'));

foreach ($response as $objects) {
	echo $object['Key']."\n";
}


echo "Get Rekt " . $_GET['Penis'] . " at " . $_GET['web'];

echo  "<img src=\"https://s3.amazonaws.com/collect-fydp2/img01.png?response-content-disposition=inline&X-Amz-Security-Token=AgoGb3JpZ2luEBEaCXVzLWVhc3QtMiKAAhf7njaDlEJh37EeCrHIbzfYCy6oseZRnlViBSW7r%2FSCtXzj4p4S0EXetYGX%2FHjuYLi14sOYgZT7K4lH0Hn74doPmzuCMGpZoBBgQ4JTMCRgZrwdQI2GST4kv8e7WvKpc49FWSm2eGecVCSLH8yVRG0h9fnmJ%2BTOcD%2B50S1IdbW%2FtNCT9m0iPPPrqit2eCgguBKdFbEX3i3gofHDfzymAe68SLX0HHJgz84QfC5smjts47OXw67vgeyX3mZNcdVgu%2FtdlhrfM5Cq%2BGFncACqKE52KBe50SzJR4iFQRIKFDlqsaAzrrvG3UA5RuIm1NeFKtumQjdDNGH0BntBotNeIAUq2wMIOhAAGgw2NzkzNTMwNDY1NzQiDNN6LQaM6AzKLBSyByq4A77%2BB6qY1hGbxXaWMN3k%2FOZEZpo2UC%2FIUPMpS1ES%2FNyeBSFxh2OWqyRmpmgqT0BWTtYvqqDvcUiyH00ZYP3mqJzgcKtH0YCIvd7mtwt9AUhJeCcR5Morx68oFvzJzAZmeAC5P0xlzlhm4KeEPlIEUEMoxjND8gI6jaJr256jlWX8AcwN52Ec5HGySEHKy3N6VKEGW4AvsVoUF7T%2Fmtv9Wu8sXRZyUbJLK6c2pjntMbrKh15HrivnYmC55dt2bp6MJ4ni0%2Bt5DBml3DW5aKxZTGjL9neS0LFI1QPpsqoY0iRnYUBs55BnhGuh7rrf4a7tu9HjRsZn4dN74AiLsJ6A%2Bp5Bi0eK9LM50M5X1Z0e8ZrSp5Zyc9gMvHierWF283nOssXStyPj3npoXTIsSxapSH04J7ZbF4DbF%2FFe9Pg1s7FGEQ2Y3cDCMshHeWqHwQ3Y8Tiq6b9JTzMe5%2BSVnmG%2Blz3E80Fj%2Fy7%2BAvGx%2BNPAWbHqSlZ7Mw3a6GMIea87tAZdq%2Fc7UbhodkdF41%2BWKdex5sYmY9eV1ApKa1DIL%2B34TPJ1cn1hgiZKh5bIza9lD%2FweelMBj2f97SB9MLHuodUF&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20180314T014946Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAI7YDGCKTJMLAPOQA%2F20180314%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=a49ed6a9c93ff9b3e4c90898c3ef02975fb840d526e992cf7db38c7bbd51728c\" style=\"width:100%\">";

*/

?>


</body>
</html>
