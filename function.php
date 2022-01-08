<?php 

$database = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query) {
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $database;
   
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $address = htmlspecialchars($data['address']);
    $gender = htmlspecialchars($data['gender']);
    $position = htmlspecialchars($data['position']);
    $status = htmlspecialchars($data['status']);

    $query = "INSERT INTO karyawandata
                VALUES
               ('', '$name', '$email', '$address', '$gender', '$position', '$status') 
            ";
    mysqli_query($database, $query);

    return mysqli_affected_rows($database);
}

function hapus($data) {
    global $database;
    $id = $data["id"];
    mysqli_query($database, "DELETE FROM karyawandata WHERE id = $id");
    
    return mysqli_affected_rows($database);

}


?>