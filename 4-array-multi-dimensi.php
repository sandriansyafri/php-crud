<?php 
    $students = [
        ['Sandrian','161140','Sistem Informasi'],
        ['Hafid','161118','Psikologi'],
        ['Fikri','161110','Akuntansi'],
        ['Yogi','161148','Teknik Sipil'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multi Dimensi</title>
    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Arial';
            color: #333;
            background: #bbb;
        }

        ul{
            list-style: none;
        }

        .page-content{
            width: 85%;
            margin: 50px auto;
            background: #fff;
            padding: 50px;
        }

        .article-body{
            display: flex;
            flex-wrap: wrap;
            column-gap: 5px;
        }

        .card{
            border: 1px solid black;
            padding: 30px;
            cursor: pointer;
            transform: scale(.9);
            transition: 
                transform .3s ease, 
                .3s background .3s,
                .3s color .3s;
        }

        .card:hover{
            background: #111;
            color: #fff;
            transform: scale(1);
        }

    </style>
</head>
<body>

   <main>
       <div class="page-content">
           <articl class="student">
               <div class="article-header">
                   <h1>Students</h1>
               </div>
               <div class="article-body">
                 <?php foreach($students as $student) : ?>
                    <div class="card">
                      <div class="card-body">
                          <ul class="student-lists">
                              <li class="student-name"><?= $student[0] ?></li>
                              <li class="student-nrp"><?= $student[1] ?></li>
                              <li class="student-direction"><?= $student[2] ?></li>
                          </ul>
                      </div>
                  </div>
                 <?php endforeach ?>
               </div>
           </articl>
       </div>
   </main>
    
</body>
</html>