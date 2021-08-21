<?php
require 'functions.php';
session_start();

if (!$_SESSION["login"]) {
    header('Location: login.php');
    exit;
}

$total_data = count(query('SELECT *FROM students'));
$data_per_page = 4;
$total_page = ceil($total_data / $data_per_page);
$page_active = (isset($_GET["page"]) ? $_GET["page"] : 1);
$first_data_page = ($data_per_page * $page_active) - $data_per_page;
$students = query("SELECT * FROM students LIMIT $first_data_page, $data_per_page");
// $students = query("SELECT * FROM students ORDER BY id DESC");
/** ORDER BY */

isset($_POST["find"]) && $students = find($_POST["keywords"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        form input,
        form button {
            padding: .5rem;
            font-size: 1.5rem;
        }

        .form-control {
            display: flex;
            column-gap: 10px;
        }


        .form-control input {
            width: 100%;
        }

        .btn-search {
            width: 20%;
            color: #fff;
            background: blue;
        }

        .page-active {
            color: red;
        }
    </style>
</head>

<body>

    <main>
        <div class="page-content">
            <article class="students-table">
                <div class="article-header">
                    <h1>Students</h1>
                </div>
                <div class="article-body">
                    <a href="create.php" class="btn btn-create">Create students</a>

                    <form action="" method="post">
                        <div class="form-control">
                            <input type="text" name="keywords">
                            <button class="btn btn-search" type="submit" name="find">Search</button>
                        </div>
                    </form>

                    <br>
                    <?php if ($page_active > 1) : ?>
                        <a href="?page=<?= $page_active - 1  ?>">&lt;</a>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                        <?php if ($i == $page_active) : ?>
                            <a class="page-active" href="?page=<?= $i; ?>"><?= $i; ?></a>
                        <?php else : ?>
                            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                        <?php endif; ?>
                    <?php endfor ?>
                    <?php if ($page_active < $total_page) : ?>
                        <a href="?page=<?= $page_active + 1  ?>">&gt;</a>
                    <?php endif; ?>


                    <div class="table-container">
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
                    </div>

                    <br>

                </div>
            </article>
        </div>
    </main>

</body>
<script src="assets/js/script.js"></script>

</html>