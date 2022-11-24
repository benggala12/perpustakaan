<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
    } else {
        include "koneksi.php";
        $qry_login=mysqli_query($conn,"select * from siswa where username ='".$username."' and password = '".md5($password)."'");
        if (mysqli_num_rows($qry_login)>0){
            session_start();
            $_SESSION['id_siswa']=$data_login['id_siswa'];
            $_SESSION['nama_siswa']=$data_login['nama_siswa'];
            $_SESSION['status_login']=true;
            header("location:home.php");
        } else {
            echo "<script>alert('Username dan Password tidak Benar');location.href='index.php';</script>";
        }
    }
}

?>