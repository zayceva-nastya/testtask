<div class="topBlock">
     <span class="namePage">Product Add</span> 
     <a class='btn' href="/">Cancel</a>
     <input class='btn' form='product_form' type="submit" value="Save">
</div>

 <form id="product_form" method="post" action='/add'>

    <label for="sku">
        SKU <input type="text" id="sku" name='sku' placeholder="Please, enter SKU">
    </label>

    <label for="name">
        Name <input type="text" id="name" name='name' placeholder="Please, enter name">
    </label>

    <label for="price">
        Price <input type="text" id="price" name="price" placeholder="Please, enter price">
    </label>

    <div class='typeSwitcher'>
        <span class='pageAdd'>Type product</span>
        <select name="type_id"  id="productType">
            <option disabled selected> Type switcher</option>
            <option id='dvd' value="1">DVD</option>
            <option id='book' value="2">Book</option>
            <option id='furniture' value="3">Furniture</option>
        </select>
    </div>
    <input class='block hidden' type="hidden" id='hidden' placeholder="">
    <label class='block hidden' id="boxDvd" for="size">
        Size(in MB) <input type="text" id="size" value="0" name='size_dvd' placeholder="Please, enter size">
        <div>Please, provide size in MB</div>
    </label>

    <label class='block hidden' id="boxBook" for="weight_book">
        Weight (in KG) <input type="text" id="weight" value="0" name='weight_book' placeholder="Please, enter weight">
        <div>Please, provide weight in KG</div>
    </label>

    <div class='block hidden' id="demens">
        <span class="pageAdd">Demensions (HxWxL)</span>
        <label for="height_furniture">Height (CM)<input type="text" value="0" id="height" name='height_furniture'
                                                        placeholder="Please, enter height"></label>
        <div>Please, provide height in CM</div>
        <label for="width_furniture">Width (CM)<input type="text" value="0" id="width" name='width_furniture'
                                                      placeholder="Please, enter width"></label>
        <div>Please, provide furniture in CM</div>
        <label for="length_furniture">Length (CM)<input type="text" id="length" value="0" name='length_furniture'
                                                        placeholder="Please, enter length"></label>
        <div>Please, provide length in CM</div>
    </div>


</form>

    
 
</form> -->


