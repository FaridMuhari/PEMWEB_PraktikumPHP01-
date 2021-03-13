<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Praktikum 1 - Farid Muhari</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>
<br>
<center><h3>Form Nilai Siswa</h3></center>
	<main role="main" class="container" id="main">
	<hr>
	<br>	
		<div class="row">
			<div class="col-md-12 d-flex justify-content-center">
					<div class="card-body">
						<form action="proses.php" method="POST">
							<div class="form-group row">
								<label class="col-4 col-form-label" for="name">Nama Lengkap</label>
								<div class="col-8">
									<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
								</div>
							</div>
							<div class="form-group row">
								<label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
								<div class="col-8">
									<select id="matkul" name="matkul" class="custom-select">
										<option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
										<option value="Basis Data">Basis Data</option>
										<option value="Pemrograman Web">Pemrograman Web</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="uts" class="col-4 col-form-label">Nilai UTS</label>
								<div class="col-8">
									<input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="uas" class="col-4 col-form-label">Nilai UAS</label>
								<div class="col-8">
									<input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
								<div class="col-8">
									<input id="tugas" name="tugas" placeholder="Nilai Tugas / Pratikum" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-4 col-8">
									<button name="submit" type="submit">Simpan</button>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>

</body>

</html>