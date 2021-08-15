
<?php

//*==================================
//* STANDAR OUTPUT ================== 
//*==================================
//TODO disable comment to run script;

    // echo "Hello World!";
    // print "Hello World!";

//*==================================
//* DEBUG =========================== 
//*==================================
//TODO disable comment to run script;

    $myArrays = [1,2,3,4];
    // var_dump($myArrays);
    // print_r($myArrays);


//*==================================
//* VARIABLE ========================
//*==================================
//TODO disable comment to run script;

    $message = "Hello Wolrd!";
    // echo $message;

//*==================================
//* OPERATOR ========================
//*==================================
//TODO disable comment to run script;

    $x = 3;
    $y = 7;

    // $result = $x * $y;
    // $result = $x / $y;
    // $result = $x + $y;
    // $result = $x - $y;
    // $result = $x % $y;
    // echo $result;

//*==================================
//* CONCAT pada Type Data String; ===
//*==================================
//TODO disable comment to run script;

    $firstName = "Sandrian";
    $lastName = "Syafri";

    // echo $firstName . " " . $lastName;


//*==================================
//* OPERATOR ASSIGNMENT =============
//*==================================

//TODO disable comment to run script;
    $a = 8;
    $b = 4;
    $c = 5;
    $d = 9;
    $sayHello = 'Hello';

    // $a *= 2;
    // $a /= 2;
    // $a += 2;
    // $a -= 2;

    $sayHello .= " ";
    $sayHello .= "Admin";
    
    // echo $a;
    // echo $sayHello;

//*==================================
//* OPERATOR PERBANDINGAN ===========
//*==================================
//TODO disable comment to run script;

    $number = 9;
    // var_dump($number > 3);
    // var_dump($number >= 3);
    // var_dump($number < 3);
    // var_dump($number <= 3);
    // var_dump($number == 3);
    // var_dump($number != 3);

//*==================================
//* OPERATOR IDENTITAS ==============
//*==================================
//TODO disable comment to run script;

    $myStrings = "1";
    $myNumber = "1";

    // var_dump($myStrings === $myNumber); /** ( === ) membandingan value & type data  */
    // var_dump($myStrings !== $myNumber); /** ( !== ) membandingan value dan type data */
    // var_dump($myStrings == $myNumber); /** ( == ) membandingan value nya saja */

//*==================================
//* OPERATOR LOGIKA =================
//*==================================

//TODO disable comment to run script;

    // var_dump(8 > 10 && 2 >= 2); /** false */
    // var_dump(11 > 10 && 2 >= 2); /** true */
    // var_dump(8 > 10 || 2 >= 2); /** true */
    // var_dump(1 > 10 || 2 !== 2); /** false */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax PHP</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <main>
        <div class="page-content">
            <article class="variable">
                <div class="article-header">
                    <h1>Output</h1>
                    <h1>Echo & Print</h1>
                </div>
                <div class="article-body">
                    <table >
                        <tbody>
                            <tr>
                                <td><b>Output from echo </b></td>
                                <td><?php echo $message ?></td>
                            </tr>
                            <tr>
                                <td><b>Output from print </b></td>
                                <td><?php print $message ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
            <article class="operator">
                <div class="article-header">
                    <h1>Operator</h1>
                </div>
                <div class="article-body">
                    <table >
                        <tbody>
                            <tr>
                                <td><b>Numbers </b></td>
                                <td><?php echo $x . "," . $y ?></td>
                            </tr>
                            <tr>
                                <td><b>*</b></td>
                                <td> x * y =  <?= $x * $y ?></td>
                            </tr>
                            <tr>
                                <td><b>/</b></td>
                                <td> x / y =  <?= $x / $y ?></td>
                            </tr>
                            <tr>
                                <td><b>+</b></td>
                                <td> x + y =  <?= $x + $y ?></td>
                            </tr>
                            <tr>
                                <td><b>-</b></td>
                                <td> x - y =  <?= $x - $y ?></td>
                            </tr>
                            <tr>
                                <td>%</td>
                                <td>x % 2 =  <?= $x % 2 ?></td>
                            </tr>
                          
                        </tbody>
                    </table>
                   
                </div>
            </article>
            <article class="concat">
                <div class="article-header">
                    <h1>Concat</h1>
                </div>
                <div class="article-body">
                    <table >
                        <tbody>
                            <tr>
                                <td><b>Tanpa Contact </b></td>
                                <td><?= $firstName,$lastName ?></td>
                            </tr>
                            <tr>
                                <td><b>Concat </b></td>
                                <td><?= $firstName . " " . $lastName ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
            <article class="operator-assignment">
                <div class="article-header">
                    <h1>Operator Assigment</h1>
                </div>
                <div class="article-body">
                    <table >
                        <tbody>
                            <tr>
                                <td><b>Numbers </b></td>
                                <td>
                                    <ul>
                                        <li><?php echo "a = $a" ?></li>
                                        <li><?php echo "b = $b" ?></li>
                                        <li><?php echo "c = $c" ?></li>
                                        <li><?php echo "d = $d" ?></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b> a *= 10</b></td>
                                <td><?= $a *= 10 ?></td>
                            </tr>
                            <tr>
                                <td><b> b /= 5</b></td>
                                <td><?= $b /= 5 ?></td>
                            </tr>
                            <tr>
                                <td><b> c += 4</b></td>
                                <td><?= $c += 4 ?></td>
                            </tr>
                            <tr>
                                <td><b> d -= 7</b></td>
                                <td><?= $d -= 7 ?></td>
                            </tr>
                          
                        </tbody>
                    </table>
                   
                </div>
            </article>
        </div>
    </main>
</body>
</html>

    


