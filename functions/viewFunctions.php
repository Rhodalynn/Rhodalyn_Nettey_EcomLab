<?php
include("../controllers/product_controller.php");

function view_brands(){
    $results= view_brand();
    $i=0;
    ?>
    <table>

    
    <?php
    while($i < count($results)){
?>

<tr>
    <td>
        <?php echo $results[$i]["brand_name"]; ?>
    </td>

    <td>
        <form action="../functions/delete_function.php" method="POST">
            <input type= "hidden" name= "pid" value= " <?php echo $results[$i]["brand_id"]; ?>">


            <button type ="submit" name= "delete">Delete</button>
        </form>

    </td>

    <td>
        
    <form action="../admin/editBrands.php" method="POST">
        <button type="submit" name="update">Update</button>
        <input type= "hidden" name= "pid" value= " <?php echo $results[$i]["brand_id"]; ?>">
    </form>
    </td>
</tr>
<?php
$i++;

    }
    ?>
    </table>
    <?php

}

function view_category(){
    $results= view_category();
    $i=0;
    ?>
    <table>

    
    <?php
    while($i < count($results)){
?>

<tr>
    <td>
        <?php echo $results[$i]["category_name"]; ?>
    </td>

    <td>
        <form action="../functions/delete_function.php" method="POST">
            <input type= "hidden" name= "pid" value= " <?php echo $results[$i]["category_id"]; ?>">


            <button type ="submit" name= "delete">Delete</button>
        </form>

    </td>

    <td>
        
    <form action="../admin/editCategory.php" method="POST">
        <button type="submit" name="update">Update</button>
        <input type= "hidden" name= "pid" value= " <?php echo $results[$i]["category_id"]; ?>">
    </form>
    </td>
</tr>
<?php
$i++;

    }
    ?>
    </table>
    <?php

}


function drop_brands(){
    $results= view_brand();
    $i=0;
    ?>
    <select name="brands">

    
    <?php
    while($i < count($results)){
?>
<option value='<?php echo $results[$i]["brand_id"]; ?>'><?php echo $results[$i]["brand_name"]; ?></option>
    
<?php
$i++;

    }
    ?>
    </select>
    <?php

}

function drop_category(){
    $results= view_category();
    $i=0;
    ?>
    <select name="categories">

    
    <?php
    while($i < count($results)){
?>
<option value='<?php echo $results[$i]["category_id"]; ?>'><?php echo $results[$i]["category_name"]; ?></option>
    
<?php
$i++;

    }
    ?>
    </select>
    <?php

}


?>