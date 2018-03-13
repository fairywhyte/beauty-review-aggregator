<?php

$query = "SELECT id,image_url FROM images WHERE parsed_at IS NULL";

$resource = $dbh->prepare($query);

$result = $resource->execute();
print_r($resource->errorInfo());

function save_image($inPath,$outPath)
{
    $in=    fopen($inPath, "rb");
    $out=   fopen($outPath, "wb");
    while ($chunk = fread($in,8192))
    {
        fwrite($out, $chunk, 8192);
    }
    fclose($in);
    fclose($out);
}

while (false !== ($row = $resource->fetch()))
{
    save_image('https://www.sephora.com'.$row['image_url'],'image'.$row['id'].'.jpg');

}

