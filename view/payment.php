
<?php 
include('../controllers/product_controller.php');
include('../view/bootstrap.php');
include('../settings/core.php');

//state variables

echo'

<a href="../view/cart.php" class="btn btn-info btn-sm">Back</a>
    <h3>Make Payment</h3>
    <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Welcome</a>
  <form class="form-inline">
    <a class="btn btn-outline-success my-2 my-sm-0" href="../view/userIndex.php">Home</a>
    <a class="btn btn-outline-success my-2 my-sm-0" href="../login/login.php">Logout</a>
  </form>
</nav> 
<br><br>
';

$data=selectAllFromCart_contr($p_id);
if ($data>0) {

    echo " Hello ".$_SESSION['customer_name']." ";
    $totalToPay =  0;
    foreach ($data as $row) {
        $totalAmount=$row['product_price'] * $row['qty'];
        $totalToPay += $totalAmount; 
        $product_title=$row['product_title'];
        $product_quantity=$row['qty'];
        
    
        echo 
        " <li class='list-group-item'>
             You are purchasing   ".$product_quantity." ".$product_title."(s) at ".$totalAmount."
        </li>";
    }
   
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paystack</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    
</head>
<body>
<form id="paymentForm" class="p-3 m-3 w-300">
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" id="email" class="form-control" value="<?php echo $_SESSION['customer_email']; ?>" required />
  </div>
  <div class="form-group mb-3">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" class="form-control" value = "<?php echo $totalToPay ?>" disabled/>
  </div>

  <div class="form-submit">
    <button class="btn btn-dark text-white" type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>


<script src="../js/pay.js"></script>    
</body>
</html>