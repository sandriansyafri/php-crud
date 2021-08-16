<?php 

//* ====================================================================
//* LINGKUP VARIABLE ===================================================
//* ====================================================================

//TODO latihan-1;
    //TODO : Disable script to run program
        //* Global Variable
        // $x = 10;

        // function printX(){
        //     /* Scoope Variable */ 
        //     $x = 9;
        //     echo $x;
        // }

        // printX();
        // echo "<br>";
        // echo $x;

//TODO Latihan-2;
    //TODO : Disable script to run program
        //* Mengakses variable global pada scoope variable
            $number = 10;
            function printNumber(){
                global $number;
                echo "ini adalah dari function printNumber() : $number";
            }

            printNumber();
            echo "<br>";
            echo "ini adalah dari variable global : $number";

            



