<?php


$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function find($keyword)
{

    $query = "SELECT * FROM students WHERE
                    name LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    direction LIKE '%$keyword%'
                ";

    return query($query);
}

function create($data)
{
    global $conn;

    $name = htmlspecialchars($data['name']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $direction = htmlspecialchars($data['direction']);

    $image = upload();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO students
                     VALUES
                ('','$name','$nrp','$email','$direction','$image')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_error = $_FILES['image']['error'];

    //* Jika tidak ada file yang diupload
    if ($file_error === 4) {
        echo "<script>
                alert('pilih gambar dulu!');
              </script>";
        return false;
    }
    //* jika yang diupload bukan gambar
    $valid_extenstion = ['jpg', 'png', 'jpeg'];
    $file_extention = explode('.', $file_name);
    $file_extention = strtolower(end($file_extention));
    if (!in_array($file_extention, $valid_extenstion)) {
        echo "<script>
                alert('bukan gambar!');
              </script>";
        return false;
    }

    //* cek size gambar 
    if ($file_size > 3000000) {
        echo "<script>
                alert('file gambar terlalu besar!');
            </script>";
        return false;
    }

    //* generate new_file_name
    $new_file_name = uniqid();
    $new_file_name .= '.';
    $new_file_name .= $file_extention;
    move_uploaded_file($file_tmp, 'assets/img/' . $new_file_name);
    return $new_file_name;
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM students WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $direction = htmlspecialchars($data['direction']);
    $old_image = htmlspecialchars($data['old_image']);

    $file_error = $_FILES['image']['error'];
    if ($file_error === 4) {
        $image = $old_image;
    } else {
        $image = upload();
    }

    $query = "UPDATE students SET
                    name = '$name',  
                    nrp = '$nrp',  
                    email = '$email',  
                    direction = '$direction',  
                    image = '$image'
                WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
