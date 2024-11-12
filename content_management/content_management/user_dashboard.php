<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header('Location: user_login.php');
    exit();
}

include 'includes_db.php';
$result = $conn->query("SELECT * FROM posts");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>User Dashboard</h2>
        <h3>Available Posts</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($post = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $post['title']; ?></td>
                    <td><a href="<?php echo $post['file_path']; ?>" target="_blank">View File</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="user_logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
