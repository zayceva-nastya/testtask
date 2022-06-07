<?php

declare(strict_types=1);

namespace Core;

use view\Plain;

class Application 
{
    protected $router;
    protected $view;

    public function __construct()
    {
        $pathToConfig = $_SERVER['DOCUMENT_ROOT'] . '/config/storage.php';
        require "$pathToConfig";
        $this->view = new Plain($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . '/../templates');
        $this->view->setLayout('default');
   
    }
  
    public function setRouter( $router)
    {
        $this->router = $router;
        return $this;
    }

    public function handle(string $path): string
    {
        $route = $this->router->dispatch($_SERVER['REQUEST_METHOD'], $path);

        $controller = $route['controller'];
        $action = "action" . ucfirst($route['action']);

        if (!class_exists($controller)) {
            header('HTTP/1.0 404 Not Found');
            die("not class $controller" );
        }
      if(!method_exists($controller, $action)){
          die('not method');
      }

        return (new $controller($this->view))->{$action}();
    }

}
