<?php

//* ====================================================================
//* SUPER GLOBAL =======================================================
//* ====================================================================

    /** Variable Superglobal PHP ( Array Associative )
     * $_GET
     * $_POST
     * $_REQUEST
     * $_SESSION
     * $_COOKIE
     * $_SERVER
     * $_ENV

     */

    //* $_GET
        /**
         * Karena $_GET adalah array associative
         * maka untuk mengisi data 
         * kita bisa lakukan script dibawah ini
         * atau mengirimkan data secara langsung 
         * pada url.
         * 
         */
        $_GET['name'] = 'Sandrian';
        print_r($_GET);