<?php
// Include the database configuration file (make sure to configure this file)
include 'config.php';

// Start the session
session_start();

// Function to sanitize data to prevent SQL injection
function sanitize($data, $conn) {
    return mysqli_real_escape_string($conn, trim($data));
}

// Login handler
if (isset($_POST['login'])) {
    $username = sanitize($_POST['username'], $conn);
    $password = sanitize($_POST['password'], $conn);

    // Check for the username and password in the database
    $query = "SELECT * FROM businesses WHERE username = '$username' AND password = '".md5($password)."'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        // Redirect to the product upload page or dashboard
        header('Location: dashboard.php');
    } else {
        // Redirect back to the login page with an error
        header('Location: business-login.php?error=1');
    }
}

// Product submission handler
if (isset($_POST['submit_product']) && isset($_SESSION['username'])) {
    $brand_id = $_SESSION['brand_id']; // Assume brand_id is stored in the session
    $product_name = sanitize($_POST['product_name'], $conn);
    $product_price = sanitize($_POST['product_price'], $conn);
    $product_description = sanitize($_POST['product_description'], $conn);
    $product_image = sanitize($_POST['product_image'], $conn); // This should be handled with file upload in reality

    $query = "INSERT INTO products (brand_id, name, price, description, image) VALUES ('$brand_id', '$product_name', '$product_price', '$product_description', '$product_image')";
    mysqli_query($conn, $query);

    // Redirect to a confirmation page
    header('Location: submit-confirmation.php');
}

// Logout handler
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    // Redirect to the homepage
    header('Location: index.php');
}
?>
