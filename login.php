<?php
require 'functions.php';

session_start();

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if (hash('sha256', $row["password"]) === $key) {
        $_SESSION["login"] = true;
    }
}

if (isset($_SESSION["login"])) {
    header('Location: index.php');
    exit;
}



if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = $_POST["remember"];


    $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username' ");
    if (mysqli_num_rows($result)  === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            setcookie('id', $row["id"], time() + 60 * 2);
            setcookie('key', hash('sha256', $row["password"]), time() + 60);
            if (isset($remember)) {
                setcookie('login', 'true', time() + 60);
            }
            $_SESSION["login"] = true;
            header('Location: index.php');
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        tr {
            text-align: left;
        }

        th,
        td {
            padding: 10px;
        }

        input,
        button {
            padding: .5rem;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <main>
        <div class="page-content">
            <article class="login">
                <div class="login-header">
                    <h1>Login</h1>
                </div>
                <div class="login-body">
                    <?php if (isset($error)) : ?>
                        <p>username & password salah</p>
                    <?php endif ?>
                    <form action="" method="post">
                        <table>
                            <tbody>
                                <tr>
                                    <th>username</th>
                                    <td><input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <th>password</th>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="remember" checked></td>
                                    <th>Remember Me</th>
                                </tr>
                                <tr>
                                    <th>
                                        <button type="submit" name="submit">Login</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </article>
        </div>
    </main>

</body>

</html>