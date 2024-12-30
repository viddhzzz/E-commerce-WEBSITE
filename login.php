<?php
// Include database connection
require_once 'db_connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            echo "Email and Password are required.";
        } else {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];

                    // Redirect to the dashboard
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with this email.";
            }
        }
    } else {
        echo "Email and Password are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
