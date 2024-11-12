<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <a href="admin_upload.php" class="btn btn-primary">Upload Post</a>
        <a href="admin_manage_posts.php" class="btn btn-secondary">Manage Posts</a>
        <a href="admin_logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
