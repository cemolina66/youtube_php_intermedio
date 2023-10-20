<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <h1>Contact</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <tr>
            <?php foreach ($contacts as $contact) : ?>
        <tr>
            <td><?= $contact["name"] ?></td>
            <td><?= $contact["email"] ?></td>
        </tr>
    <?php endforeach; ?>
    </tr>
    </table>

</body>

</html>