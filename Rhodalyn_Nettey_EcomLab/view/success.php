<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/register_style.css">
    
    <title>Login form</title>
    

   


</head>
<body>
    <?php 
    session_start();
    if(!empty($_SESSION["cname"]))
    echo $_SESSION["cname"];
    ?>
<a href= "../actions/logout.php" ><button type="button" class="btn btn-primary">Logout</button></a>

</body>
</html>