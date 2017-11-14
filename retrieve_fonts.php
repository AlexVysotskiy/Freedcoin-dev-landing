<?php

function retrieveFonts($sourcePath, $cssName, $uri)
{
    $content = file_get_contents(__DIR__ . '/' . $sourcePath . '/' . $cssName);
    
    preg_match_all('/url\(\'(.+?\.woff[0-9]?)\'\)/', $content, $matches);
    
    foreach($matches[1] as $fontName)
    {
        $tmpName = $sourcePath . '/' . $fontName;
        file_put_contents(__DIR__ . '/' . $tmpName, file_get_contents($uri . '/' . $tmpName));
    }
}

$root = __DIR__;
$folder = 'fonts/raleway';

retrieveFonts($folder, 'stylesheet.css', 'https://freedcoin.io/');
