<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách khách hàng</h1>
    <a href="?url=add-customer">Thêm khách hàng</a>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer['id'] ?></td>
                    <td><?= $customer['name'] ?></td>
                    <td><?= $customer['email'] ?></td>
                    <td><?= $customer['phone'] ?></td>
                    <td><a href="?url=detail_customer&id=<?= $customer['id'] ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>