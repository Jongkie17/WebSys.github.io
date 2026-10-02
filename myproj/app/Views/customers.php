<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>

<body>

<h1>Customer Accounts</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($customers as $customer): ?>

    <tr>
        <td><?= esc($customer['id']) ?></td>
        <td><?= esc($customer['full_name']) ?></td>
        <td><?= esc($customer['email']) ?></td>
        <td><?= esc($customer['phone']) ?></td>
        <td><?= esc($customer['created_at']) ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>