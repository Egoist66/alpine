<?php

require_once './utils/files.php';

require_once './utils/files.php';

function getContent(string $path) {
    $arr = getFiles('./templates/*.php');
    $count = sizeof($arr) + 1;

    if (!file_exists("./templates/$path.php")) {
        file_put_contents("./templates/$path.php", "<h2>temp{$count}</h2>");
    } else {
        ob_start();
        require "./templates/$path.php";
        $content = ob_get_clean();
        return $content;
    }
}


function appRouter(string $route = 'default')
{
    switch ($route) {
        case 'default': {
            $content = getContent('default');
            return $content;
        }
        case $route: {
            if (isset($_GET['action'])) {
             
                switch ($_GET['action']) {
                    case 'delete': {
                        unlink("./templates/$route.php");
                        header('Location: index.php?page=default');
                        exit;
                     
                    }

                }
            }

            $content = getContent($route);
            return $content;
        }
    }


    // $content = "";
    // $content = match ($route) {
    //     "default" => getContent('default'),
    //     $route => getContent($route)
  
    // };

    // return $content;


}
