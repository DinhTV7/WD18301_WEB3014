<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sửa thông tin khách hàng</h1>
    <form action="?url=edit_customer&id=<?= $customer['id'] ?>" method="post">
        Name:
        <input type="text" value="<?= $customer['name'] ?>" name="name">
        Email:
        <input type="text" value="<?= $customer['email'] ?>" name="email">
        Phone:
        <input type="text" value="<?= $customer['phone'] ?>" name="phone">
        <button type="submit">Sửa thông tin</button>
    </form>

</body>

</html>