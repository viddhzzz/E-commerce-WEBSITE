<?php
include 'cob_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $saveInfo = isset($_POST['saveInfo']) ? 'Yes' : 'No';

    // Check if any required fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "Name, email, and message are required fields.";
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message, save_info) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $message, $saveInfo);

    // Execute the query
    if ($stmt->execute()) {
        echo "<h2>Form Submission Successful</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Message: $message</p>";
        echo "<p>Save Info: $saveInfo</p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
