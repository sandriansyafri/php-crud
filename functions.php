<?php
    

     $conn = mysqli_connect('localhost','root','','phpdasar');

     function query($query){
         global $conn;
         $result = mysqli_query($conn,$query);
         while($row = mysqli_fetch_assoc($result)){
             $rows[] = $row;
         }

         return $rows;
     }
?>