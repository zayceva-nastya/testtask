<?php

namespace Controller;

use View\Plain;
use Model\Storage\PdoDB;
use Model\Repository\BookRepository;
use Model\Repository\DvdRepository;
use Model\Repository\FurnitureRepository;
use Model\Repository\ProductRepository;
use Controller\Factory;

 abstract  class ProductController 
{
    protected string $tableName;
    
    public function __construct(Plain $view)
    {
        $this->view=$view;
    
        $this->repository = new ProductRepository(new PdoDB(DSN, USER_NAME, PASSWORD),$this->tableName);
            
    
    }



    protected function redirect(string $location)
    {
        header("Location: $location");
        exit();
    }
    public function actionShow()
    {
    

      return  $this
            ->view
            ->render(
                '/main',
                ['product'=>$this->repository->findAll()]
            );
    }

    public function actionAdd()
    {
        // print_r($_POST);
        $this->repository->create($_POST);
        return $this->view
        ->render(
            'main',
        []);
    }

    public function actionDel()
    {
        $this->repository->delete($_GET['id']);
        $this->redirect('/');
    }


    public function actionShowAdd(){
       return $this->view
        ->render(
            '/edit',
        []);
        
    }

   
}