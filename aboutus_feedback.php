<?php

// Connect to MySQL
$db = mysqli_connect("localhost", "root", "") or die("Connection failed");

// Select a database
mysqli_select_db($db, "imanverse") or die("Select database failed");

// Capture POST variables
if (isset($_POST["name"])) $name = $_POST["name"];
else $name = "";

if (isset($_POST["email"])) $email = $_POST["email"];
else $email = "";

if (isset($_POST["comment"])) $comment = $_POST["comment"]; // Corrected variable
else $comment = "";

if (isset($_POST["rating"])) $rating = $_POST["rating"]; // Corrected variable
else $rating = "";

// Provide numbering
$sqlchecknumber = "SELECT * FROM feedback";
$resultchecknumber = mysqli_query($db, $sqlchecknumber);
$totalchecknumber = mysqli_num_rows($resultchecknumber);

$Num = 1000;
if ($totalchecknumber == 0) {
    $Numid = $Num;
} else {
    $Numid = ($totalchecknumber * 1) + 999 + 1;
}

// The SQL statement
$sql = "INSERT INTO feedback (id, name, email, comment, rating) 
        VALUES ('$Numid', '$name', '$email', '$comment', '$rating')"; // Updated with the correct variable

// Query the MySQL server
$result = mysqli_query($db, $sql);

if ($result) {
    echo "<script>
            alert('Feedback received successfully!');
            window.location.href='Aboutus.php';
          </script>";
} else {
    echo "<script>
            alert('Feedback submission failed!');
            window.history.back();
          </script>";
}

?>
