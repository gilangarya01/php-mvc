<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>User Details</h1>
        <p>ID:
            <?= $user['id']; ?>
        </p>
        <p>Username:
            <?= $user['username']; ?>
        </p>
        <p>Email:
            <?= $user['email']; ?>
        </p>
        <a href="?url=user" class="btn btn-primary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>