<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post HTML</title>
</head>

<body>
    <tr>
        <td>First Name</td>
        <td><?= $_POST['first_name'] ?></td>
    </tr>
    <br>
    <tr>
        <td>Last Name</td>
        <td><?= $_POST['last_name'] ?></td>
    </tr>
</body>

</html>