<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/register_style.css">
    
    <title></title>
    

   


</head>
<body>
<form class="form" method="POST" action="../actions/add_category.php">
    <input type= "text" name= "category" class="form-control" placeholder="Enter Category Name.">

<button type="submit" name="submit" class="btn btn-primary">Add Category</button>
</form>
<?php
require("../functions/viewFunctions.php");
view_category();

?>

</body>
