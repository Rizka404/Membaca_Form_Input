<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Masukan Nama Anda</label>
            <input name="nama" type="text">
            <button>Proses</button>
        </div>
    </form>
	<?php
			$nama = @$_GET['nama'];
			?>
	<?php
			if ($nama) {
			echo "Selamat Datang, {$nama} <br>";
}
?>
</body>
</html>

