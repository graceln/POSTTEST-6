<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>urfavmovies</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="input.css">
    <link rel="icon" href="./img/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <header>
        <div class="logo"><i class="fa fa-film"> urfavmovies</i></div>
        <nav>
            <ul>
                <li><a href="#movie" class="active">Movies</a></li>
                <li><a href="index.php">Sign Out</a></li>
            </ul>
        </nav>
    </header>

   <section>
   <br><br><br>
       <div class="wrapper">
           <h2>Ubah Data Film</h2>
           <?php
           include 'connection.php';
           $id = $_GET['id'];
           $query_mysql = mysqli_query($connection, "SELECT * FROM movie WHERE id='$id'");
           $nomor = 1;
           while($data = mysqli_fetch_array($query_mysql)){
           ?>
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="judul" value="<?php echo $data['judul'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="tahun" value="<?php echo $data['tahun'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="kategori" value="<?php echo $data['kategori'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Rating</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="rating" value="<?php echo $data['rating'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 40px;"><br>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="file" name="gambar">
			    </div>			
                <br>
                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="edit">Ubah</button>
                </div>
            </form>
            <?php } ?>
       </div>
   </section>

    <footer>
        <p>Copyright &copy; 2022 urfavmovies. All right reserved</p>
    </footer>
</body>
</html>

