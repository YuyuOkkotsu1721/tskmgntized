<?php
require_once "config.php";

// Check if the request is POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate venture title
    if(empty(trim($_POST["VentureTitle"]))){
        echo "Venture title cannot be blank.";
    } else{
        // Prepare an update statement
        $sql = "UPDATE venture SET VentureTitle = ? WHERE VentureID = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_VentureTitle, $param_VentureID);

            // Set parameters
            $param_VentureTitle = trim($_POST["VentureTitle"]);
            $param_VentureID = $_POST["VentureID"];

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo "Venture updated successfully.";
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
