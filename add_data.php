<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Add Biodata</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="h1">
		<h1>ADD BIODATA</h1>
	</div>
	<p>Silahkan Masukan Data Diri Anda Di Bawah Ini.</p>

	<form action="submit_data.php" method="post">
		<div class="form-control">
			<label for="nama_lengkap">Nama Lengkap</label>
			<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
		</div>

		<div class="form-control">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="" disabled selected>Jenis Kelamin</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>

		<div class="form-control">
			<label for="tempat_lahir">Tempat Lahir</label>
			<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
		</div>

		<div class="form-control">
			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
		</div>

		<div class="form-control">
			<label for="agama">Agama</label>
			<select name="agama" id="agama">
				<option value="" disabled selected>Agama</option>
				<option value="Islam">Islam</option>
				<option value="Hindu">Hindu</option>
				<option value="Buddha">Buddha</option>
				<option value="Kristen">Kristen</option>
			</select>
		</div>

		<div class="form-control">
			<label for="alamat_lengkap">Alamat Lengkap</label>
			<textarea name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat Lengkap"></textarea>
		</div>

		<div style="text-align: right;">
			<input type="submit" name="submit" value="+ Add Data" class="btn-add-data">
		</div>
	</form>
</body>

</html>