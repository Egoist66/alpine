<?php

function getFiles(string $url) {

    $htmlFiles = glob($url);
 
    $modifiedFiles = [];
    
    foreach ($htmlFiles as $file) {
        array_push($modifiedFiles,
        basename($file
        ));
    }
    
    return $modifiedFiles;
}
