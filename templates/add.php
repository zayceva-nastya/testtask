<div class="topBlock">
     <span class="namePage">Product Add</span> 
     <a class='btn' href="/">Cancel</a>
     <input class='btn' form='product_form' type="submit" value="Save">
</div>

    <form id="product_form" method="post" action='/add'>

   <label for="sku">
       SKU  <input type="text" id = "sku" name='sku'  placeholder="Please, enter SKU">
    </label> 
    
    <label for="name">
        Name <input type="text"    id = "name" name = 'name' placeholder="Please, enter name">
    </label>

    <label for="price">
        Price <input type="text" id = "price" name="price"  placeholder="Please, enter price">
    </label>

    <div class='typeSwitcher'>
        <span class='pageAdd'>Type product</span>
        <select name="type_id" onclick="kk()"  id="productType">
                    <option disabled selected> Type switcher</option>
                    <option id='dvd'  value="1"  >DVD</option>
                    <option id='book'  value="2" >Book</option>
                    <option id='furniture'  value="3">Furniture</option>
        </select>
    </div>
    <input class='hidden' type="hidden"  id='hidden' placeholder="">
    <label class='hidden' id = "boxDvd" for="size" >
          Size(in MB) <input type="text" id = "size"  value="0" name='size_dvd'placeholder="Please, enter size">
          <div>Please, provide size in MB</div>
    </label>

    <label class='hidden' id ="boxBook"  for="weight_book">
        Weight (in KG)    <input type="text" id ="weight"  value="0"  name = 'weight_book' placeholder="Please, enter weight">
        <div>Please, provide weight in KG</div>
    </label>
    
    <div class='hidden' id="demens">
    <span class="pageAdd">Demensions (HxWxL)</span>
        <label for="height_furniture">Height (CM)<input type="text" value="0"  id = "height" name = 'height_furniture' placeholder="Please, enter h"></label>
        <div>Please, provide height in CM</div>
        <label for="width_furniture">Width (CM)<input type="text" value="0" id = "width"  name = 'width_furniture' placeholder="Please, enter w"></label>
        <div>Please, provide furniture in CM</div>
        <label for="length_furniture">Length (CM)<input type="text" id = "length"  value="0" name = 'length_furniture' placeholder="Please, enter l"></label>
        <div>Please, provide length in CM</div>
</div>

    
</form>

<!-- 
    000Webhost

<div class="topBlock">
     <span class="namePage">Product Add</span> 
     <a class='btn' href="/">Cancel</a>
      <input class='btn' form='product_form' type="submit" value="Save">
    
</div>

    <form id="product_form" method="post" action='/add'>

   <label for="sku">
       SKU  <input type="text" id = "sku" name='sku'  >
    </label> 
    
    <label for="name">
        Name <input type="text"    id = "name" name = 'name'>
    </label>

    <label for="price">
        Price ($) <input type="text" id = "price" name="price"  >
    </label>

    <div class='typeSwitcher'>
        <span class='pageAdd'>Type product</span>
        <select name="type_id" onclick="kk()"  id="productType">
                    <option disabled selected> Type switcher</option>
                    <option id='dvd' data-show='size' value="1"   >DVD</option>
                    <option id='book' data-show='weight' value="2"  >Book</option>
                    <option id='furniture' data-show='demens' value="3" >Furniture</option>
        </select>
    </div>
    <input class='hidden' type="hidden"  id='hidden' placeholder="">
    <label class='hidden'  for="size" >
          Size(MB) <input type="text" id = "size"  pattern="\d{1,5}"  name='size_dvd'>
          <div class="boxProduct">Please, provide size in MB</div>
    </label>

    <label class='hidden'   for="weight_book">
        Weight (KG)    <input type="text" id ="weight"   pattern="\d{1,5}"  name = 'weight_book'>
        <div class="boxProduct">Please, provide weight in KG</div>
    </label>
    
    <div class='hidden' id="demens">
    <span class="pageAdd">Demensions (HxWxL)</span>
        <label for="height_furniture">Height (CM)<input type="text"     pattern="\d{1,5}"   id = "height" name = 'height_furniture' ></label>
        <div class="boxProduct">Please, provide height in CM</div>
        <label for="width_furniture">Width (CM)<input type="text"     pattern="\d{1,5}"  id = "width"  name = 'width_furniture' ></label>
           <div class="boxProduct">Please, provide width in CM</div>
        <label for="length_furniture">Length (CM)<input type="text"     pattern="\d{1,5}" id = "length"  name = 'length_furniture' ></label>
        <div class="boxProduct">Please, provide length in CM</div>
</div>

    
 
</form> -->


