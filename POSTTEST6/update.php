<?php 
include 'connection.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];
$rating = $_POST['rating'];
$gambar = $_FILES['gambar']['name'];
 
if($gambar != "") {
    $ekstensi = array('jpg', 'png');
    $x = explode('.', $gambar);
    $extension = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if(in_array($extension, $ekstensi) === true) {
        move_uploaded_file($file_tmp, 'gambar/'.$gambar);

        $query = "UPDATE movie SET judul='$judul', tahun='$tahun', kategori='$kategori', rating='$rating', gambar='$gambar'";
        $query .= "WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Error  : ".mysqli_errno($connection)." - ".mysqli_error($connection));
        }else{
            echo "<script>alert('Data berhasil diubah!');window.location='dashboard.php';</script>";  
        }

    }else{
        echo "<script>alert('Ekstensi gambar hanya jpg dan png!');window.location='edit.php';</script>";   
    }

}else{
    $query = "UPDATE movie SET judul='$judul', tahun='$tahun', kategori='$kategori', rating='$rating'";
    $query .= "WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query Error  : ".mysqli_errno($connection)." - ".mysqli_error($connection));
    }else{
        echo "<script>alert('Data berhasil diubah!');window.location='dashboard.php';</script>";  
    }     
}

?>