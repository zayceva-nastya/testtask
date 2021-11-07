<?php
/** @var array $table */

/** @var array $headers */
/** @var array $errors */

//?>

<form action='del'>
<table border="1">

    <tr>


    <?php
    print_r($product);
    print_r($furniture);
    print_r($dvd);


    print_r($books);
 foreach($table as $key){
   
    ?>
      <td><?= $key->getSku() ?></td>
      <td><?= $key->getName() ?></td>
      <td><?= $key->getPrice() ?>$</td>      
      <td><?= $key->getType() ?></td>      
      <td><?= $key->getSize() ?>MB</td>
      <td><?= $key->getWeight() ?></td>
      <td><?= $key->getLength() ?>x<?= $key->getHight() ?>x<?= $key->getWidth() ?></td>
    


 

<td><input class='delete-checkbox' type='checkbox' name='id[]' value='<?=$key->getSku();?>'> 
 </td></tr>
<?php }
  ?>

</table>
<input type="submit">
</form>
<a href='showAdd'>ADD
