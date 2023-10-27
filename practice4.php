<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['mult'];

    if ($num <= 0) {
        echo "Your number is too small!"
    }
    else {
        for ($i = 1; $i < $num; $i++) {
            echo 
        }
    }
    

    // Process the input, validate, and perform any required actions here
}
?>