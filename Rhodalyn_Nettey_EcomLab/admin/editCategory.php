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
$result= selectOneCategory($id);
?>
</head>
<body>
<form class="form" method="POST" action="../actions/editCategory.php">
    <input type= "text" name= "category" class="form-control" placeholder=" <?php echo $result['category_name']; ?>">
    <input type= "hidden" name= "cartid" class="form-control" value=" <?php echo $result['category_id']; ?>">

<button type="submit" name="edit" class="btn btn-primary">Edit Category</button>
</form>


</body>
<?php

}

else{};


?>



