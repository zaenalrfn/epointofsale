<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'epointofsale');

    function registrasi($data) {
        global $conn;

        $email = strtolower(stripslashes($data["email"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script> 
                    alert('email sudah terdaftar');
                  </script>";
            return false;
        }

        // cek konfirmasi password
        if( $password !== $password2 ) {
            echo "<script> 
                    alert('konfirmasi password tidak sesuai');
                  </script>";
            return false;
        } 

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$password')");

        return mysqli_affected_rows($conn);
    }

    
?>