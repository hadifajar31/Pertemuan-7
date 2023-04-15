<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Biodata</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div class="h1">
            <h1>MY BIODATA</h1>
        </div>
        <p>Silahkan Lihat Data Diri Anda Di Bawah Ini.</p>
        <div class="text">
            <h4>Data Kamu Berhasil Disimpan!</h4>
            <p>Data Biodata Berhasil Disimpan di dalam cookies / session</p>
        </div>

        <div>
            <span class="label">Nama Lengkap:</span>
            <span><?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : (isset($_COOKIE['nama']) ? $_COOKIE['nama'] : '-'); ?></span>
        </div>

        <div>
            <span class="label">Jenis Kelamin:</span>
            <span><?php echo isset($_SESSION['jenis_kelamin']) ? $_SESSION['jenis_kelamin'] : (isset($_COOKIE['jenis_kelamin']) ? $_COOKIE['jenis_kelamin'] : '-'); ?></span>
        </div>

        <div>
            <span class="label">Tempat, Tanggal Lahir:</span>
            <span><?php echo isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : (isset($_COOKIE['tempat_lahir']) ? $_COOKIE['tempat_lahir'] : '-'); ?>,
                <?php echo isset($_SESSION['tanggal_lahir']) ? $_SESSION['tanggal_lahir'] : (isset($_COOKIE['tanggal_lahir']) ? $_COOKIE['tanggal_lahir'] : '-'); ?></span>
        </div>

        <div>
            <span class="label">Agama:</span>
            <span><?php echo isset($_SESSION['agama']) ? $_SESSION['agama'] : (isset($_COOKIE['agama']) ? $_COOKIE['agama'] : '-'); ?></span>
        </div>

        <div>
            <span class="label">Alamat:</span>
            <span><?php echo isset($_SESSION['alamat']) ? $_SESSION['alamat'] : (isset($_COOKIE['alamat']) ? $_COOKIE['alamat'] : '-'); ?></span>
        </div>

        <a href="add_data.php" class="back-button">Kembali</a>
    </div>
</body>

</html>