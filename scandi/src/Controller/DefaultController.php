<?php

namespace Controller;
use View\Plain;
use Model\Storage\PdoDB;
use Model\Repository\BookRepository;
use Model\Repository\DvdRepository;
use Model\Repository\FurnitureRepository;
use Model\Repository\ProductRepository;
use Controller\Factory;


class DefaultController extends ProductController{
protected string $tableName = '`book`';

public function __construct(Plain $view)
{
    
parent::__construct($view);
$this->repository = new ProductRepository(new PdoDB(DSN, USER_NAME, PASSWORD),['`book`','`dvd`','`furniture`']);


}

public function actionShow(){
    return $this->view
    ->setLayout('/default')
    ->render(
        '/main',
        [
            'books' => $this->repository->findAll()
        ]
    );
}
public function actionShowAdd(){
    return $this->view
     ->render(
         '/edit',
     []);
     
 }

}