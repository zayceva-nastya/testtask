<?php

namespace Controller;

use View\Plain;
use Model\Storage\PdoDb;
use Model\Repository\ProductRepository;


class ProductController extends DefaultController
{
protected $tableName='`product`';
    
    public function __construct(Plain $view)
    {
        parent::__construct($view);

    }




    public function actionAdd()
    {
       
        if($this->repository->checkSku($_POST['sku'])){

        $_SESSION['errors']['sku']='Such sku already exist!';
        return $this->view->render(
              '/addError',
              ['product'=>$this->repository->checkSku($_POST['sku']),
            ]
            );
     
        }else{
            $data = $_POST;
            foreach($data as &$v){
                if(empty($v)){
                   $v=0;
                }
            }
             $this->repository->create($data);
             $this->redirect('/');
    
        }
    }



}