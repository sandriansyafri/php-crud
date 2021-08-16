<?php
require('functions.php');
   if(isset($_POST["submit"])){
       if(create($_POST) > 0){
          echo "<script>
                    alert('create student succeed!');
                    document.location.href='index.php';
                </script>";
       } else {
            echo "<script>
                    alert('create student failed!');
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

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial;
            color: #333;
        }
        .page-content{
            height: 100vh;
            display: flex;
        }

        form{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
            width: 30%;
            padding: 40px;
            border: 1px solid #bbb;
            margin: auto;
        }

        .btn{
            cursor: pointer;
            border-radius: 5px;
            padding: 10px 20px;
            letter-spacing: 1px;
            border: none;
            outline: none;

        }

        form label{
            margin-bottom: 5px;
        }

        form input, form button{
            padding: .5rem;
            font-size: 1rem;
        }
        

        .form-control{
            display: flex;
            flex-direction: column;
        }

        .btn-submit{
            background: blue;
            color: white;
            padding: 10px 20px;
           
          
        }
        

    </style>
</head>
<body>


    <main>
        <div class="page-content">
            <form action="" method="POST">
                <div class="form-control">
                    <label for="">Name</label>
                    <input autocomplete="off" autofocus="on" type="text" name="name">
                </div>
                <div class="form-control">
                    <label for="">NRP</label>
                    <input autocomplete="off" type="text" name="nrp">
                </div>
                <div class="form-control">
                    <label for="">Email</label>
                    <input autocomplete="off" type="text" name="email">
                </div>
                <div class="form-control">
                    <label for="">Direction</label>
                    <input autocomplete="off" type="text" name="direction">
                </div>
                <div class="form-control">
                    <label for="">Image</label>
                    <input autocomplete="off" type="text" name="image">
                </div>
                <div class="form-control">
                    <button class="btn-submit" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>