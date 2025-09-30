<?php
// Connect to MySQL
$db = mysqli_connect("localhost", "root", "") or die("Connection failed");

// Select a database
mysqli_select_db($db, "imanverse") or die("Select database failed");

// Initialize variables from POST data
$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";

// Provide numbering
$sqlchecknumber = "SELECT * FROM learn_contribution";
$resultchecknumber = mysqli_query($db, $sqlchecknumber);
$totalchecknumber = mysqli_num_rows($resultchecknumber);

$Num = 1000;
$Numid = $totalchecknumber == 0 ? $Num : ($totalchecknumber * 1) + 999 + 1;

// SQL statement to insert data
$sql = "INSERT INTO learn_contribution (id, firstname, lastname, email, phone, message) 
        VALUES ('$Numid', '$firstname', '$lastname', '$email', '$phone', '$message')";

// Query the MySQL server
$result = mysqli_query($db, $sql);

if ($result) {
    // Handle file upload
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'Uploaded Files/';

        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $target_path = $uploadDir . basename($_FILES['upload']['name']); 
        $filename = basename($_FILES['upload']['name']);

        if (move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)) {
            echo "<script>
                    alert('Your contribution and file uploaded successfully!');
                    window.location.href='learn_share.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Your contribution received but file upload failed! Check file permissions.');
                    window.location.href='learn_share.php';
                  </script>";
        }
    } else {
        if (isset($_FILES['upload']['error']) && $_FILES['upload']['error'] !== UPLOAD_ERR_NO_FILE) {
            echo "<script>
                    alert('Your contribution, but file upload failed! Error: " . $_FILES['upload']['error'] . "');
                    window.location.href='learn_share.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Your contribution, but no file uploaded!');
                    window.location.href='learn_share.php';
                  </script>";
        }
    }
} else {
    echo "<script>
            alert('Submission failed!');
            window.history.back();
          </script>";
}
?>
