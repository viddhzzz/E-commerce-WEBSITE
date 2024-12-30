<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: person-acc.html");
    exit();
}

require_once 'db_connect.php';

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT username, email, password FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .container {
            margin-top: 50px;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            background-color: #444;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #555;
        }
        th {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($user['username']); ?></h2>
        <p>Your account details:</p>
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo htmlspecialchars($user['username']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo htmlspecialchars($user['password']); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
