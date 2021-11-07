<?php

namespace Controller;

use Model\Storage\PdoDb;
use Model\Repository\DvdRepository;
use View\Plain;

class DvdController extends ProductController{
    protected string $tableName = 'dvd';

public function __construct(Plain $view)
{
parent::__construct($view);

    $this->repository = new DvdRepository(new PdoDB(DSN, USER_NAME, PASSWORD),$this->tableName
    );

   
}

public function actionShow(){
    return $this->view
    ->setLayout('/default')
    ->render(
        '/main',
        [
            'dvd' => $this->repository->findAll()
        ]
    );
}


}
