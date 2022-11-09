<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/register_style.css">
    <link rel="stylesheet" href="../css/parsley.css">
    
    <title>Registration form</title>
</head>
    <body>
                
        <div class = "container" >
             <!-- ADD THIS ATTRIBUTE TO THE FORM TO ALSO VALIDATE WITH JAVASCRIPT BEFORE SUBMITTING TO BACKEND:
              onsubmit="return validateForm(event);" -->
                <small id="error"></small>
            <form  method="POST" action="../actions/registerprocess.php" id="form" class="form" data-parsley-validate="">
                        <h2>Register With Us</h2>
                        <h5 style="color: red;">
                            <!-- <?php
                                // if (isset($_GET["error"])){
                                //     echo $_GET["error"];
                                // }
                            ?> -->
                        </h5><br>
                        <div class="form-control ">
                            <label for="customer_name">Full name:</label>
                            <input type="text" id="customer_name" name="customer_name" data-parsley-required="true">
                            <small id="customer_nameError"></small>
                        </div>

                        <div class="form-control ">
                            <label for="customer_email">Email address:</label>
                            <input type="email"  id="customer_email" name="customer_email" >
                            <small id="customer_emailError"></small>
                        </div>

                        <div class="form-control">
                            <label for="customer_pass">Password:</label>
                            <input type="password" id="customer_pass" name="customer_pass" >
                        </div>

                        <div class="form-control">
                            <label for="conf_password">Confirm password:</label>
                            <input type="password" class="form-control" id="conf_password" name="conf_password" >
                            <small id="conf_passwordError"></small>
                        </div>

                        <div class="form-control">
                            <label for="customer_country">Country:</label>
                            <input type="text" id="customer_country" name="customer_country" >
                            <small id="customer_countryError"></small>
                        </div>

                        <div class="form-control">
                            <label for="city">City:</label>
                            <input type="text" id="customer_city" name="customer_city" >
                            <small id="customer_city"></small>
                        </div>

                        <div class="form-control">
                            <label for="customer_contact">Contact Number:</label>
                            <input type="text" id="customer_contact" name="customer_contact" >
                            <small id="customer_contactError"></small>
                        </div>
                        <input type="hidden" value="2" name="user_role">

                        <button type="submit" class="btn btn-primary" name="submit" id="submit" >Create account</button><br>

                        Already have an account? <a href="login.php">Login</a>
            </form>
                
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/parsley.js"></script>
        
    </body>

</html>
