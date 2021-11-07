<?php

namespace Model;

 class Furniture
{
    private  $sku;
    private $name;
    private  $price;
    private  $type;
    private  $length;
    private  $hight;
    private  $width;


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

   
    public function getLength()
    {
        return $this->length;
    }

   
    public function setLength(  $length)
    {
  
        $this->length = $length;
        return $this;
    }
    public function getWidth()
    {
        return $this->width;
    }

   
    public function setWidth($width)
    {
  
        $this->width = $width;
        return $this;
    }
    public function getHight()
    {
        return $this->hight;
    }

   
    public function setHight(  $hight)
    {
  
        $this->hight = $hight;
        return $this;
    }
}