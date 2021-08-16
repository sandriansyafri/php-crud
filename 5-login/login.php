<?php
    //* apakah sudah submit
    if(isset($_POST["submit"])){
    //* apakah username  & password sudah sama
        if($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
            header('Location: admin.php');
            exit;
        } else {
    //* jika tidak sama munculkan pesan kesalahan
            $error = true;
        };
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial;
            color: #333;
        }

        .frame{
            display: flex;
            height: 100vh;
            border: 1px solid black;
        }

        form{
            width: 40%;
            border: 1px solid #444;
            padding: 40px;
            margin: auto;
        }
        
        form input,
        form button{
            padding: .5rem;
            font-size: 1rem;
        }

        form label{
            margin-bottom: 5px;
        }

        button{
            cursor: pointer;
        }

        .form-control{
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }

        form h2{
            background: #ddd;
            padding: 20px;
            font-size: 16px;
            color: red;
            text-align: center;
            font-style: italic;
        }

    </style>
</head>
<body>

    <div class="frame">
        <form method="POST">
            <?php if(isset($error)) : ?>
                <h2>Username atau password salah!</h2>
            <?php endif; ?>
            <div class="form-control">
                <label for="">Username</label>
                <input type="text" name="username">
            </div>
            <div class="form-control">
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-control">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>