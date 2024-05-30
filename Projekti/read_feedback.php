<?php
include("connectdb.php");

$query = "SELECT * FROM feedback";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['feedback']}</td>
                <td>
                    <button class='btn btn-info' onclick='populateUpdateForm({$row['id']}, \"{$row['name']}\", \"{$row['feedback']}\")'>Edit</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No feedback found</td></tr>";
}
?>
