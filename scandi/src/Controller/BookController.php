<?php

namespace Controller;
use Model\Storage\PdoDb;
use Model\Repository\BookRepository;
use View\Plain;


class BookController extends ProductController{
protected string $tableName = '`book`';

public function __construct(Plain $view)
{
    
parent::__construct($view);
    $this->repository = new BookRepository(new PdoDB(DSN, USER_NAME, PASSWORD),$this->tableName
    );

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

}