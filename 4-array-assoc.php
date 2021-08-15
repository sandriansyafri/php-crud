<?php 

    $students = [
        [
            'name' => 'Sandrian',
            'nrp' => '1610140',
            'email' => 'sandriannsyafri@gmail.com',
            'direction' => 'Sistem Informasi',
            'image' => 'profile-1.jpg',
        ],
        [
            'name' => 'Hafid',
            'nrp' => '1610118',
            'email' => 'hafid@gmail.com',
            'direction' => 'Teknik Informatika',
            'image' => 'profile-2.jpg',
        ],
        [
            'name' => 'Faiz',
            'nrp' => '1610110',
            'email' => 'faiz@gmail.com',
            'direction' => 'Teknik Komputer',
            'image' => 'profile-3.jpg',
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assoc</title>
</head>
<body>
    <main>
        <div class="page-content">
            <article class="students">
                <div class="article-header">
                    <h1>Students</h1>
                </div>
                <div class="article-body">
                    <?php foreach($students as $student) : ?>
                        <ul class="student-lists">
                            <li class="student-name"><?= $student["name"] ?></li>
                            <li class="student-nrp"><?= $student["nrp"] ?></li>
                            <li class="student-email"><?= $student["email"] ?></li>
                            <li class="student-direction"><?= $student["direction"] ?></li>
                           <li>
                               <img src="assets/img/<?= $student["image"] ?>"   alt="">
                           </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </article>
        </div>
    </main>
</body>
</html>