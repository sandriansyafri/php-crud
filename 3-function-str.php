<?php 

    //* =====================================================
    //* FUNCTION STRING =====================================
    //* =====================================================

    //* Built in function string
        //TODO  strlen();
            // TODO Disable comment to run script
        // $myStrings = 'Sandrian Syafri';
        // $resultLength = strlen($myStrings);
        // echo $resultLength;

        //TODO  strlen();
            // TODO Disable comment to run script

            $str1 = 'AAA';
            $str2 = 'AAAA';


            //? Return Values ( note : case sensitive)
            /** =============================================================
             *  Jika return value < 0 maka str1 lebih kecil dari str 2
             *  Jika return value > 0 maka str1 lebih besar dari str 2
             * jika return value = 0 maka nilai nya sama
             * ==============================================================
             */

                // $resultCompare = strcmp($str1,$str2);
                // switch($resultCompare){
                //     case 0 : 
                //         echo 'nilai kedua string sama';
                //         break;
                //     case 1 : 
                //         echo 'nilai str1 lebih besar str 2';
                //         break;
                //     default : 
                //         echo 'nilai str2 lebih besar dari str 1';
                // }

        
        
        //TODO explode() 
            $firstName = 'Sandrian Syafri';
            $time = '10:10';

            $explodeName = explode(' ',$firstName);
            $explodeTime = explode(':',$time);
            // var_dump($explodeName); 
            // var_dump($explodeTime);
            
            /** Looping untuk array */
            
            // forEach($explodeTime as $time){
            //     echo $time;
            //     echo "<br>";
            // }
