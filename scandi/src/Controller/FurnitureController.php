<?php

namespace Controller;

use Model\Storage\PdoDb;
use Model\Repository\FurnitureRepository;
use View\Plain;

class FurnitureController extends ProductController{
    protected string $tableName = '`furniture`';

public function __construct(Plain $view)
{
parent::__construct($view);


    $this->repository = new FurnitureRepository(new PdoDB(DSN, USER_NAME, PASSWORD),$this->tableName
    );

    
}

public function actionShow(){
    return $this->view
    ->setLayout('/default')
    ->render(
        '/main',
        [
            'furniture' => $this->repository->findAll()
        ]
    );
}


}
