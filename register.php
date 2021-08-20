<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('Success')
            </script>";
    } else {
        echo mysqli_error($conn);
        // echo "<script>
        //         alert('Faild')
        //     </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <article class="register">
                <div class="register-header">
                    <h1>Register</h1>
                </div>
                <div class="register-body">
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
                                    <th>confirm password</th>
                                    <td><input type="password" name="confirm_password"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <button type="submit" name="submit">Submit</button>
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