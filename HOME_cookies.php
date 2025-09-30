<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cookies.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a cookie is set
if (isset($_COOKIE['cookiesAccepted'])) {
    $cookiesAccepted = $_COOKIE['cookiesAccepted'];

    // Insert or update user preference in the database
    $sql = "INSERT INTO user_preferences (user_id, cookies_accepted, date_time) VALUES (1, '$cookiesAccepted', NOW()) 
            ON DUPLICATE KEY UPDATE cookies_accepted='$cookiesAccepted', date_time=NOW()";

    if ($conn->query($sql) === TRUE) {
        echo "Cookie preference saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No cookie preference set yet.";
}

$conn->close();
?>