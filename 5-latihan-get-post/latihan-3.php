<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST | Page 3</title>
    <style>
        body{
            font-family: Arial;
            color: #333;
            display: flex;
            height: 100vh;
        }

        form{
            width: 40%;
            padding: 50px;
            border: 1px solid #333;
            border-radius: 10px;
            margin: auto;
            box-shadow: 0 5px 5px 0 rgba(0, 0, 0, .2);
        }

        .form-control{
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }

        .form-control label{
            font-size: 1.3rem;
        }

        .form-control input,
        .form-control button{
            padding: .5rem;
            font-size: 1rem;
            letter-spacing: 1px;
        }

        .form-control input{
            border: none;
            outline: none;
            padding: .5rem 0;
            color: #333;
            border-bottom: 1px solid #333;
        }

        .form-control button{
            cursor: pointer;
        }

    </style>
</head>
<body>

    <form action="latihan-4.php" method="POST">
        <div class="form-control">
            <label for="">Name</label>
            <input type="text" name="name" autofocus="on" autocomplete="off">
            <button type="submit">Submit</button>
        </div>
    </form>
    
</body>
</html>