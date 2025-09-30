<?php
// Sambungan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imanverse";

$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Dapatkan input dari borang
$query = isset($_GET['query']) ? $_GET['query'] : '';

if (!empty($query)) {
    // SQL untuk mencari
    $sql = "SELECT url FROM qari WHERE nama LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Ambil URL pertama dari hasil carian
        $row = $result->fetch_assoc();
        $url = $row['url'];

        // Redirect ke halaman yang sesuai
        header("Location: " . $url);
        exit;
    } else {
        // Jika tiada hasil ditemui
        echo "<script>alert('Page not found'); window.history.back();</script>";
    }
    $stmt->close();
} else {
    echo "<script>alert('Please insert keyword.'); window.history.back();</script>";
}

$conn->close();
?>
