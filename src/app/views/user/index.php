<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>User List</h1>
        <a href="user/create" class="btn btn-success">Add User</a>
        <table class="table mt-2">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?= $user['id']; ?>
                        </td>
                        <td>
                            <?= $user['username']; ?>
                        </td>
                        <td>
                            <?= $user['email']; ?>
                        </td>
                        <td>
                            <a href="user/show/<?= $user['id']; ?>">
                                <span class="badge bg-primary">View</span>
                            </a>
                            <a href="user/edit/<?= $user['id']; ?>">
                                <span class="badge bg-warning">Edit</span>
                            </a>
                            <a href="user/destroy/<?= $user['id']; ?>" onclick="return confirm('Are you sure?')">
                                <span class="badge bg-danger">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>