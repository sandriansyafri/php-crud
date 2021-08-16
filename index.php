<?php
    require('functions.php');

    $students = query("SELECT * FROM students");

       
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <main>
        <div class="page-content">
            <article class="students-table">
                <div class="article-header">
                    <h1>Students</h1>
                </div>
                <div class="article-body">
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>NRP</th>
                                <th>Email</th>
                                <th>Direction</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($students as $student) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $student["name"]?></td>
                                    <td><?= $student["nrp"]?></td>
                                    <td><?= $student["email"]?></td>
                                    <td><?= $student["direction"]?></td>
                                    <td>
                                        <img width="100" height="100" src="assets/img/<?= $student["image"] ?>" alt="">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </main>

</body>
</html>