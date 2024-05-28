<?php
include 'connectdb.php'; // Ensure your database connection script is properly included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $id = $_POST['id'];
        switch ($_POST['action']) {
            case 'update':
                $brand = $_POST['brand'];
                $parfume_name = $_POST['perfume_name'];
                $price = $_POST['price'];
                $query = $conn->prepare("UPDATE parfumes SET brand = ?, perfume_name = ?, price = ? WHERE id = ?");
                $query->bind_param("ssdi", $brand, $perfume_name, $price, $id);
                $query->execute();
                break;
            case 'delete':
                $query = $conn->prepare("DELETE FROM parfumes WHERE id = ?");
                $query->bind_param("i", $id);
                $query->execute();
                break;
        }
    }
}

// Insert new parfume entries only once, you can comment this out after initial use or handle it via admin controls
$parfumes = [
    ['brand' => 'Chanel', 'perfume_name' => 'No. 5 Eau de Parfum', 'price' => 135.00],
    ['brand' => 'Gucci', 'perfume_name' => 'Bloom Eau de Parfum', 'price' => 120.00],
    ['brand' => 'Marc Jacobs', 'perfume_name' => 'Daisy Eau de Toilette', 'price' => 80.00],
    ['brand' => 'Tom Ford', 'perfume_name' => 'Black Orchid', 'price' => 150.00]
];

foreach ($parfumes as $parfume) {
    $query = $conn->prepare("INSERT INTO parfumes (brand, perfume_name, price) VALUES (?, ?, ?)");
    $query->bind_param("ssd", $parfume['brand'], $parfume['perfume_name'], $parfume['price']);
    $query->execute();
}

// Fetch all parfumes
$result = $conn->query("SELECT * FROM parfumes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfume List | EverGlow Beauty</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: radial-gradient(ellipse at center, rgba(236, 206, 176, 0.5) 10%, rgb(101, 45, 17) 100%);
            padding: 20px;
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            text-align: left;
        }
        th {
            background-color: peru;
        }
        td {
            background-color: white;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            text-decoration: none;
        }
        .btn-edit {
            background-color: blue;
        }
        .btn-delete {
            background-color: red;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Parfume List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Perfume Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['brand']) ?></td>
                    <td><?= htmlspecialchars($row['perfume_name']) ?></td>
                    <td>$<?= number_format($row['price'], 2) ?></td>
                    <td>
                        <form action="parfume-list.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="action" value="update">
                            <input type="text" name="brand" value="<?= $row['brand'] ?>" required>
                            <input type="text" name="perfume_name" value="<?= $row['perfume_name'] ?>" required>
                            <input type="text" name="price" value="<?= $row['price'] ?>" required>
                            <button type="submit" class="btn btn-edit">Save</button>
                        </form>
                        <form action="parfume-list.php" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
