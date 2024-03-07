<?php
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if VentureID is provided
    if(empty(trim($_POST["VentureID"]))){
        echo "Venture ID is missing.";
    } else{
        // Prepare a delete statement
        $sql = "DELETE FROM venture WHERE VentureID = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_VentureID);

            // Set parameters
            $param_VentureID = trim($_POST["VentureID"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo "Venture deleted successfully.";
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
} else {
    echo "No POST request received.";
}
?>
