<?php
// --- Database Configuration ---
$host = "localhost"; // Change to your database host if needed
$dbuser = "root";
$dbpass = "";
$dbname = "movie_reviews";

// Start the session at the beginning of the file
session_start();

// --- Create Connection ---
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// --- Check Connection ---
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Get Form Inputs ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // --- Validate Inputs ---
    if (empty($username) || empty($password)) {
        die("<h3 style='color:red;'>Both fields are required.</h3>");
    }

    // --- Prepare and Execute SQL Statement ---
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // --- Check if User Exists ---
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // --- Verify Password ---
        if (password_verify($password, $hashed_password)) {
            // Store username in session
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['id'];

            // Successful login: redirect to index.php
            header("Location: main.php");
            exit();
        } else {
            echo "<h3 style='color:red;'>Incorrect password.</h3>";
        }
    } else {
        echo "<h3 style='color:red;'>User not found.</h3>";
    }

    $stmt->close();
}

$conn->close();
?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", function (e) {
            const username = document.querySelector("input[name='username']").value.trim();
            const password = document.querySelector("input[name='password']").value.trim();

            if (!username || !password) {
                e.preventDefault();
                alert("Both username and password are required.");
            }
        });
    }
});
</script>
