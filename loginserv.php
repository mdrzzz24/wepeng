<?php

    if (isset($_POST['submit_login'])) {
        include 'koneksi.php';
        $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['pass']."' ");

        $data = mysqli_fetch_array($cek_data);
        $level = $data ['level'];
        $nama = $data ['email'];
        $id = $data ['email'];
        if (mysqli_num_rows($cek_data)>0){
            session_start();
            $_SESSION['nama'] = $nama;
                if ($level == 'admin') {
                    // header("location:../dashboard/index/index_murid.php?id=$id");
                    echo"
                    <script>
                        alert('hallo admin');
                        document.location.href = 'landing/admin.php?id=$id';
                    </script>";
                }
                elseif ($level == 'user') {
                    // header("location:../dashboard/index/index_guru.php?id=$id");
                    echo"
                    <script>
                        alert('hallo user');
                        document.location.href = 'landing/user.php?id=$id';
                    </script>";
                }
        }
        else {
            echo"
                    <script>
                        alert('Data Login Yang Anda Masukan Salah!');
                        document.location.href = 'index.php';
                    </script>";
        }
    }
?>