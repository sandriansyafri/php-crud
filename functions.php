<?php
    

     $conn = mysqli_connect('localhost','root','','phpdasar');

     function select($query){
         global $conn;
         $result = mysqli_query($conn,$query);
         while($row = mysqli_fetch_assoc($result)){
             $rows[] = $row;
         }

         return $rows;
     }

     function create($data){
        global $conn;
        
        $name = htmlspecialchars($data['name']);
        $nrp = htmlspecialchars($data['nrp']);
        $email = htmlspecialchars($data['email']);
        $direction = htmlspecialchars($data['direction']);
        $image = htmlspecialchars($data['image']);
        

        $query ="INSERT INTO students
                     VALUES
                ('','$name','$nrp','$email','$direction','$image')";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
        
    }

    function delete($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }


?>