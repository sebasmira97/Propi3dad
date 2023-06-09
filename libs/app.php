<?php
require_once 'controllers/error.php';

    class App {
        function __construct()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($url[0])){
                $archivoController = 'controllers/home.php';
                require_once $archivoController;
                $controller = new Home();
                $controller->loadModel('home');
                $controller->render();
                return false;
            }
            
            $archivoController = 'controllers/' . $url[0] . '.php';

            if(file_exists($archivoController)) {
                require_once $archivoController;

                $controller = new $url[0];
                $controller->loadModel($url[0]);

                //tiene el numero de elementos del arreglo
                $nparam = sizeof($url);

                if($nparam > 1){
                    if ($nparam > 2) {
                        $param = [];
                        for($i = 2; $i <$nparam; $i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller -> {$url[1]}();
                    }
                }else{
                    $controller->render();
                }
            }else{
                $controller = new Error404();
            }
        }
    }

?>