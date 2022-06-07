<?php

declare(strict_types=1);

namespace Controller;

use View\Plain;
use Model\Storage\PdoDb;
use Model\Repository\ProductRepository;


abstract class DefaultController 
{
    protected  $tableName;
    protected  $error=array();
    
    public function __construct(Plain $view)
    {
        $this->view=$view;    
        $this->repository = new ProductRepository(new PdoDb(DSN, USER_NAME, PASSWORD),$this->tableName); 

    }

    protected function redirect(string $location)
    {
        header("Location: $location");
        exit();
    }
    
    public function actionShow(){

        return $this->view
        ->setLayout('/default')
        ->render(
            '/main',
            [
                'products' => $this->repository->findAll(),
             
            ]
        );
    }

    public function actionAdd()
    {     
         $this->repository->create($data);
         $this->redirect('/');  
    }

    public function actionDel()
    {
        $this->repository->delete($_POST['id']);   
    }

    public function actionShowAdd(){

        return $this->view
         ->render(
             '/add',
             []);
        
     }
}
