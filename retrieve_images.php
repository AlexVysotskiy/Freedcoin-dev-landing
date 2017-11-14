<?php

function retrieveImages($sourcePath, $uri)
{
    $path = __DIR__ . '/' . $sourcePath;
    $fileList = scandir($path);
    array_shift($fileList);
    array_shift($fileList);
    
    foreach($fileList as $file)
    {
        if(preg_match('/^(.+?)\.tmp$/', $file, $matches))
        {
           // echo $file;
            unlink($path . '/' . $matches[0]);
             //file_put_contents($path . '/' . $matches[1], file_get_contents($uri . '/' . $sourcePath . '/' . $matches[1]));
        }
    }
}

$folder = 'images';

retrieveImages($folder, 'https://freedcoin.io/');
