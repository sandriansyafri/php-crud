<?php
require '../../functions.php';
$keywords = $_GET["keywords"];
$students = query("SELECT * FROM students WHERE
                                name LIKE '%$keywords%' OR
                                nrp LIKE '%$keywords%' OR
                                email LIKE '%$keywords%' OR
                                direction LIKE '%$keywords%'");

?>

<table border="1px">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Direction</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $student["name"] ?></td>
                <td><?= $student["nrp"] ?></td>
                <td><?= $student["email"] ?></td>
                <td><?= $student["direction"] ?></td>
                <td>
                    <img width="100" height="100" src="assets/img/<?= $student["image"] ?>" alt="">
                </td>
                <td>
                    <a href="edit.php?id=<?= $student["id"] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $student["id"] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>