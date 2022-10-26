<?php 
    require 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query_sql = "SELECT * FROM users
                WHERE username = '$username' AND password ='$password'";
    
    $result = mysqli_query($conn, $query_sql);
    
    if (mysqli_num_rows($result) > 0) {
        header("Location: dashboard.php");
    } else {
        echo "
        <script>
            alert('Username atau Password salah!');
            document.location.href = 'signin.html';
        </script>
        ";;
    }    

?>
