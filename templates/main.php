
<div id='main'>

<div class="topBlock"> 
    <span class="namePage">Product List</span> 
    <a  href='addproduct'>ADD</a>
   <input id='js-delete' class='btn' type="submit" value='Mass Delete'>
</div>

<div class='allproducts' >


 


<?php 

foreach($products as $key){

?>
 <div class='product'>
  <input class='delete-checkbox'  type='checkbox'  name='id[]' value="<?=$key->getSku()?>"> 
  <p><?= $key->getSku() ?></p>
  <p><?= $key->getName() ?></p>
  <p><?= $key->getPrice()?> $</p>  
  <?php if($key->getWeight()!=0){ ?>
  <p>Weight:<?= $key->getWeight()?> KG</p>
  <?php }?>
  <?php if($key->getSize()!=0){ ?>
  <p>Size: <?= $key->getSize()?> MB</p>
  <?php }?>
  <?php if($key->getLength()!=0){ ?>
  <p>Demension:<?= $key->getLength()?> x <?= $key->getHeight()?> x <?= $key->getWidth()?></p>
  <?php }?>
</div>



<?php }







?>

</div>

</div>
<div id="footer">Scandiweb Test  assignment</div>