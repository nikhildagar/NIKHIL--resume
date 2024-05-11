<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $project = $_POST['user-project'];

    // CSV file path
    $file = 'data.csv';

    // Open or create the CSV file
    $fp = fopen($file, 'a');

    // Write form data to the CSV file
    fputcsv($fp, array($name, $email, $project));

    // Close the CSV file
    fclose($fp);

    // Redirect back to the form page or wherever you want
    header("Location: thank-you.html");
    exit();
}
?>
