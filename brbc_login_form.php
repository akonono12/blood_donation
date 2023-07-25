<?php

// Initialize the session
session_start();
 
// Include config file
require_once "hconfig.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT brbc_id, username, password FROM brbc WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: donor_inbox.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Password incorrect.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = ".Username account not verified.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<html>

<head>
		<?php include"head.php";?>
		
<head>
    <link rel="stylesheet" type="text/css" href="css/logincss.css">   
	
</head>
    <body>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h1><b>BICOL REGIONAL BLOOD CENTER</b></h1><br>
			
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" class="form-control" value="<?php echo $username; ?>">
			<?php echo (!empty($username_err)) ? 'Invalid Input' : ''; ?>
			<span class="help-block"><?php echo $username_err; ?></span>
			
			
			
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" class="form-control">
			<span class="help-block"><?php echo $password_err; ?></span>
			<?php echo (!empty($password_err)) ? 'Try Again!!' : ''; ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Login">   
            </form>
        
        </div>
    
    </body>
</html>



