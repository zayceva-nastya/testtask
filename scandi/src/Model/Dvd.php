<?php

namespace Model;

 class Dvd
{
    private  $sku;
    private $name;
    private  $price;
    private  $type;
    private  $size;


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

    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param float $salary
     * @return Worker
     */
    public function setSize( $size)
    {
        $this->size = $size;
        return $this;
    }
 }