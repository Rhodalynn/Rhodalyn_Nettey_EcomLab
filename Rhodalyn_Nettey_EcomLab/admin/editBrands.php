<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/register_style.css">
    
    <title></title>
    
<?php
require("../controllers/product_controller.php");
if(isset($_POST['update'])){
$id= $_POST['pid'];
$result= selectOneBrand($id);
?>
</head>
<body>
<form class="form" method="POST" action="../actions/editBrand.php">
    <input type= "text" name= "brand" class="form-control" placeholder=" <?php echo $result['brand_name']; ?>">
    <input type= "hidden" name= "bid" class="form-control" value=" <?php echo $result['brand_id']; ?>">

<button type="submit" name="edit" class="btn btn-primary">Edit Brand</button>
</form>


</body>
<?php

}

else{};


?>



