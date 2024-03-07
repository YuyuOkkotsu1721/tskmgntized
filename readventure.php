<?php
require_once "config.php";

// Attempt to execute the query
$query = "SELECT * FROM venture";
if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<div class='ventureshape'>";
            echo "<input type='hidden' class='ventureID' value='" . $row['VentureID'] . "'>";
            echo "<input type='text' class='venturetitle' value='" . htmlspecialchars($row['VentureTitle']) . "'><br><br>";
            echo "<div class='venturecontrols'>";
            echo "<input type='color' class='colorpicker' id='favcolor' name='favcolor' value='#ff0000'><br><br>";
            echo "<button class='editventure'>Edit</button>";
            echo "<button class='deleteventure'>Delete</button>"; 
            echo "</div>";
            echo "</div>";
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "<p>No ventures found.</p>";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
