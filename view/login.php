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
        <div class ="container">
            <form class="form" action="../actions/loginproccess.php" method="POST"data-parsley-validate="">
                <div class="form-control"><!--username-->
                   <label for="customer_email">Email address:</label>
                    <input type="text"  id="customer_email" name="customer_email" data-parsley-required="true" data-parsley-type="email">

                    <span class="error"><!--error message on failed input-->
                       
                    </span>
                </div>
                <div class="form-control"><!--password-->
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="customer_pass" data-parsley-required="true">
                    <span class="error" style="color: red;"><!--error message on failed input-->
                        
                            
                        
                    </span>
                </div>
                <?php session_start();


              if (!empty($_SESSION['error'])) echo $_SESSION['error']; ?>
            
                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br><!--login button-->
                 don't have an account? <a href = "register.php">Register</a><!--register button-->
                 
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/parsley.js"></script>
    </body>
</html>
