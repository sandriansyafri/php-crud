<?php 

    //* =====================================================
    //* FUNCTION DATE TIME ==================================
    //* =====================================================

    //* Built in function date / time
        //TODO  date()
            //* parameter DAY
               /** 
                * d : hari dalam bentuk dua digit angka ( 01 - 31 )
                * D : hari dalam bentuk short text ( Mon -  Sun )
                * l : hari dalam bentuk full text ( Monday - Sunday)
                * j : hari dalam bentuk angka tanpa angka 0 ( 1 - 31 )
                * z : dari dalam satu tahun ( 0 - 365)
                */
            //* parameter WEEK
                /**
                 * W : minggu dalam satu satu, dimulai dari Monday
                 */
            //* parameter MONTH
                /**
                 * F : bulan dalam bentuk full text ( January - December )
                 * M : bulam dalam bentuk short text ( Jan - Dec )
                 * m : bulan dalam bentuk angka ( 01 - 12 )
                 * n : bulan dalam bentuk angka tanpa 0 ( 1 - 12 )
                 * t : Jumlah dari dalam bulan tertentu
                 */
            //* parameter YEAR
                /**
                 * o : 4 digit angka yang merepresntasikan tahun ( 1999 - 2003 ) 
                 * Y : 4 digit angka yang merepresntasikan tahun ( 1998 - 2003)
                 * y : 2 digit angka yang merepresntasikan tahun ( 98 - 03)
                 * 
                 * 
                 */
            //* parameter TIME
                /**
                 * a : huruf kecil am dan pm
                 * A : huruf besar AM dan PM
                 * g : format 12 jam tanpa angka 0 ( 1 - 12)
                 * G : format 24 jam tanpa angka 0 ( 0 -  23)
                 * h : format 12 jam dengan angka 0 ( 01 - 12 )
                 * H : format 24 jam dengan angka 0 ( 01 - 24 );
                 * i : menit
                 * s : detik
                 * u : mikro detik
                 * v : mili detik
                 * 
                 * 
                 */

    
            //* Contoh -1 
                // TODO :  Day, 12 - January 2021; 
                    // echo date('l, d - F - Y');

       
        //TODO time();
            //TODO Disable comment to run script
            //* Waktu terhitung dari 1 Januari 1970
            // echo time();

            // * Combine date() dan time();
            //TODO latihan-2 combine date & time
            //TODO Disable comment to run script
            $days = 2;
            $formatDay = 60*60*24*$days;
            // echo date('l, d - F - Y', time() + $formatDay);
            // echo date('l, d - F - Y', time() - $formatDay);

        //TODO mktime(jam,menit,detik,bulan,tahun,tanggal);
            //TODO disable comment to run script
            //* membuat waktu sendiri dengan format angka
            $createDay = mktime(0,0,0,5,17,98);
                // echo date('l, d - F - Y', $createDay);
        
        //TODO strtotime('26 jan 2012');
            //TODO disable comment to run script
            //* membuat waktu sendiri dengan format text
            $findDay = strtotime('17 May 1998');
                // echo date('l, d - F - Y', $findDay);


