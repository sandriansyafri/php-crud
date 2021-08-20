<?php
require('functions.php');

$id = $_GET["id"];
$student = query("SELECT *FROM students WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
                    alert('updated student succeed!');
                    document.location.href='index.php';
                </script>";
    } else {
        echo "<script>
                    alert('updated student failed!');
                    document.location.href='index.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            color: #333;
        }

        .page-content {
            height: 100vh;
            display: flex;
        }

        form {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            width: 30%;
            padding: 40px;
            border: 1px solid #bbb;
            margin: auto;
        }

        .btn {
            cursor: pointer;
            border-radius: 5px;
            padding: 10px 20px;
            letter-spacing: 1px;
            border: none;
            outline: none;

        }

        form label {
            margin-bottom: 5px;
        }

        form input,
        form button {
            padding: .5rem;
            font-size: 1rem;
        }


        .form-control {
            display: flex;
            flex-direction: column;
        }

        .btn-submit {
            background: blue;
            color: white;
            padding: 10px 20px;


        }
    </style>
</head>

<body>


    <main>
        <div class="page-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <h1>Edit Student</h1>
                <div class="form-control">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="old_image" value="<?= $student['image'] ?>">
                </div>
                <div class="form-control">
                    <label for="">Name</label>
                    <input autocomplete="off" autofocus="on" type="text" value="<?= $student["name"] ?>" name="name">
                </div>
                <div class="form-control">
                    <label for="">NRP</label>
                    <input autocomplete="off" type="text" value="<?= $student["nrp"] ?>" name="nrp">
                </div>
                <div class="form-control">
                    <label for="">Email</label>
                    <input autocomplete="off" type="text" value="<?= $student["email"] ?>" name="email">
                </div>
                <div class="form-control">
                    <label for="">Direction</label>
                    <input autocomplete="off" type="text" value="<?= $student["direction"] ?>" name="direction">
                </div>
                <div class="form-control">
                    <img width="100" height="100" src="assets/img/<?= $student["image"] ?>" alt="">
                </div>
                <div class="form-control">
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
                <div class="form-control">
                    <button class="btn-submit" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>