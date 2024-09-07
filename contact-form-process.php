<?php
include 'koneksi/koneksi.php';
if(isset($_POST['Name'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("Location:index.php?notif=kirimberhasil");
    }else{
        header("Location:index.php?notif=kirimgagal");
    }
}
?>