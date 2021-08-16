<?php
$students = [
    [
        'id' => 1,
        'name' => 'sandrian',
        'nrp' => '1610140',
        'email' => 'sandrian@gmail.com',
        'direction' => 'Sistem Informasi',
        'image' => 'profile-1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'hafid',
        'nrp' => '1610110',
        'email' => 'hafid@gmail.com',
        'direction' => 'Sistem Informasi',
        'image' => 'profile-1.jpg'
    ],
    [
        'id' => 3,
        'name' => 'fikri',
        'nrp' => '1610111',
        'email' => 'fikri@gmail.com',
        'direction' => 'Sistem Informasi',
        'image' => 'profile-1.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST | Page 1</title>
</head>

<body>

    <ul>
        <?php foreach ($students as $student) : ?>
            <li>
                <a href="latihan-2.php?id=<?= $student["id"] ?>&name=<?= $student["name"] ?>&nrp=<?= $student["nrp"] ?>&email=<?= $student["email"] ?>&direction=<?= $student["direction"] ?>">
                    <?= strtoupper($student["name"]) ?>
                </a>
            </li>
        <?php endforeach;  ?>
    </ul>

</body>

</html>