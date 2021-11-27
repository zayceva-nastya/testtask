<?php

namespace Model;

 class Product
{
    private  $sku;
    private  $name;
    private  $price;
    private  $type;
    private  $size_dvd;
    private  $weight_book;
    private  $length_furniture;
    private  $height_furniture;
    private  $width_furniture;


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
        return sprintf('%0.2f', $this->price);
    }

  
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

  
    public function getType()
    {
        return $this->type_id;
    }


    public function setType($type_id)
    {
        $this->type_id = $type_id;
        return $this;
    } 

    public function setWeight( $weight_book)
    {
        $this->weight_book = $weight_book;
        return $this;
    }

  
    public function getWeight()
    {
        return $this->weight_book;
    }

    public function getSize()
    {
        return $this->size_dvd;
    }

    
    public function setSize( $size_dvd)
    {
        $this->size_dvd = $size_dvd;
        return $this;
    }
   
    public function getLength()
    {
        return $this->length_furniture;
    }

   
    public function setLength(  $length_furniture)
    {
  
        $this->length_furniture = $length_furniture;
        return $this;
    }

    public function getWidth()
    {
        return $this->width_furniture;
    }

   
    public function setWidth($width_furniture)
    {
  
        $this->width_furniture = $width_furniture;
        return $this;
    }
    
    public function getHeight()
    {
        return $this->height_furniture;
    }

   
    public function setHeight($height_furniture)
    {
  
        $this->height_furniture = $height_furniture;
        return $this;
    }
}