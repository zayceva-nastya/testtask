
<form id="mainF" method="post"action="/addBook">
   <label for="sku">SKU<input type="text" name='sku' placeholder="Please, enter SKU"></label> 
    <label for="name">Name<input type="text" name = 'name' placeholder="Please, enter name"></label>
    <label for="price">Price<input type="text" name="price" placeholder="Please, enter price"></label>
    <select name="type_id"  id="type">Type
        <option id='dvd' value="1" >DVD</option>
        <option id='book' value="2" >Book</option>
        <option id='furniture'value="3" >furniture</option>
    </select>
<label for="size" >Size(in MB)<input type="text" name='size'placeholder="Please, enter size"></label>
    <label for="weight_book">Weight (in KG)<input type="text" name = 'weight_book' placeholder="Please, enter weight"></label>
    
<div>
   Demensions (HxWxL)
   <input type="text" name = 'hight' placeholder="Please, enter h">

   <input type="text" name = 'width' placeholder="Please, enter w">
   <input type="text" name = 'length' placeholder="Please, enter l">
    
</div>

    
    <a type='button' href="/">Cancel</a>
    <input type="submit">
</form>
<script>
//   function show(){
//              document.getElementById('weight').
//                         classList.
//                         toggle('hidden')
//             document.getElementById('')
//        }
    // $(document).ready(function(){
    //     $("#type").change(function(e){
    //     //    console.log($("#type option:selected").val());
    //         // $("#mainF").attr("action",$("#type option:selected").val());
    //         $("#mainF").attr("action",$("#type option:selected").val());
    //     })
    // })
    $("#mainF").submit(function(){
        $("#type").change(function(e){
            $routs=['\addBook','\addDvd','\addFurniture'];
           console.log($("#type option:selected").val());
            $("#mainF").attr("action",$("#type option:selected").val());
            $("#mainF").attr("action",$("#type option:selected").val());
        })
    })

</script>