<?php


?>

<div class="topBlock">
     <span class="namePage">Product Add</span> 
     <a class='btn' href="/">Cancel</a>
     <input class='btn' form='addForm' type="submit" value="Save">
</div>

    <form id="addForm" method="post" action='/add'>

   <label for="sku">
       SKU  <input type="text" id = "sku" name='sku' placeholder="Please, enter SKU" value="<?=$product->getSku()?$product->getSku():""?>">
    </label> 
    
    <label for="name">
        Name <input type="text"    id = "name" name = 'name' placeholder="Please, enter name" value="<?=$product->getName()?$product->getName():""?>">
    </label>

    <label for="price">
        Price <input type="text" id = "price" name="price" placeholder="Please, enter price"value="<?=$product->getPrice()?>">
    </label>

    <div class='typeSwitcher'>
        <span class='pageAdd'>Type product</span>
        <select name="type_id" onclick="kk()"  id="productType">
                    <option disabled selected> Type switcher</option>
                    <option id='dvd' data-show='size' value="1"  data-rout='\addDvd' >DVD</option>
                    <option id='book' data-show='weight' value="2" data-rout='\addBook' >Book</option>
                    <option id='furniture' data-show='demens' value="3"data-rout='\addFurniture' >Furniture</option>
        </select>
    </div>

    <label class='hidden' id = "size" for="size" >
          Size(in MB) <input type="text"  name='size_dvd'placeholder="Please, enter size" >
    </label>

    <label class='hidden' id = "weight" for="weight_book">
        Weight (in KG)    <input type="text"  name = 'weight_book' placeholder="Please, enter weight" >
    </label>
    
    <div class='hidden' id="demens">
    <span class="pageAdd">Demensions (HxWxL)</span>
        <label for="hight_furniture">Height (CM)<input type="text" id = "hight" name = 'hight_furniture' placeholder="Please, enter h"></label>
        <label for="width_furniture">Width (CM)<input type="text" id = "width" name = 'width_furniture' placeholder="Please, enter w"></label>
        <label for="length_furniture">Length (CM)<input type="text" id = "length" name = 'length_furniture' placeholder="Please, enter l"></label>
    
</div>

    
 
</form>
