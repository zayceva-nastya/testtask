<?php
namespace Core;

// use App\Framework\ApplicationInterface;
// use App\Framework\Routing\RouterInterface;
// use App\MVC\Controller\CodController;
// use Model\Repository\RepositoryInterface;
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
        var_dump($this->view);
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
          die('method');
      }

        return (new $controller($this->view))->{$action}();
    }

}
