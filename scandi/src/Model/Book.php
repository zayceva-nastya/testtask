<?php

namespace Model;

 class Book
{
    private  $sku;
    private $name;
    private  $price;
    private  $type;
    private  $weight;
 

    public function getSku()
    {
        return $this->sku;
    }

  
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName( $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

  
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

  
    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
        return $this;
    } 

    public function setWeight( $weight)
    {
        $this->weight = $weight;
        return $this;
    }

  
    public function getWeight()
    {
        return $this->weight;
    }



  
}