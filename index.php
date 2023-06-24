<!--
    SNBT SNPMB FAKE RESULT GENERATOR 2023
    MADE BY jiojwowjeowkosko
    JUST FOR FUN belajar wengdev
 -->
<?php include 'header.php';?>
<body>
	<div class="container" id="main">	
		<div class="box">
			<div class="card">
				<div class="row">
					<div class="col-12 col-sm-5 d-sm-block">
						<img src="assets/img/logo-header.png" class="img-fluid header-img" alt="Logo SNPMB" />
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col">
						<span class="title">PENGUMUMAN HASIL SELEKSI SNBT SNPMB 2023</span>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col">
						<p style="color: white;">Masukkan nomor peserta UTBK-SNBT dan tanggal lahir Anda.</p>
					</div>
				</div>

				<div class="row">
					<div class="col">
                        <form action="generate_result.php" method="POST">
						<div class="form-group">
							<label for="nopes"></label>
                            <div class="form-row">
                            <div class="col">
							<input type="number" name="nopes" class="form-control no-spinners" placeholder="No peserta" tabindex="1" size="12" autocomplete="off">
							<small id="nopes-help" class="form-text">*Masukkan 12-digit nomor peserta UTBK-SNBT Anda.</small>
						</div>
                        <div class="col">
							<input type="text" name="nama" class="form-control no-spinners" placeholder="Nama peserta" tabindex="1" size="12" autocomplete="off">
							<small id="nopes-help" class="form-text">*Masukkan nama peserta UTBK-SNBT Anda.</small>
						</div>
                     </div>
                     <div class="form-group">
							<label></label>
							<div class="form-row">
								<div class="col">
                                <select name="kodeptn" id="kodeptn" class="form-control no-spinners" tabindex="6" autocomplete="off" required="">
						        <option value="" selected="">-- Pilih PTN --</option>
					            </select>
								</div>
								<div class="col">
								<select name="jurusan" id="jurusan" class="form-control no-spinners" tabindex="7" autocomplete="off" required="">
						<option value="" selected="">-- Pilih Jurusan --</option>
					</select>							
                                 </div>
								<div class="col">
                                <select name="prodi" id="prodi" class="form-control no-spinners" tabindex="8" autocomplete="off" required="">
						<option value="" selected="">-- Pilih Prodi --</option>
					</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label></label>
							<div class="form-row">
								<div class="col">
									<input type="number" name="day" class="form-control no-spinners" tabindex="2" maxlength="2"  size="2" autocomplete="off" placeholder="dd">
									<small id="day-help" class="form-text">Tanggal (2 digit): 01-31</small>
								</div>
								<div class="col">
									<input type="number" name="month" class="form-control no-spinners" tabindex="3" maxlength="2"  size="2" autocomplete="off" placeholder="mm">
									<small id="month-help" class="form-text">Bulan (2 digit): 01-12</small>
								</div>
								<div class="col">
									<input type="number" name="year" class="form-control no-spinners" tabindex="4" maxlength="4"  size="4" autocomplete="off" placeholder="yyyy">
									<small id="year-help" class="form-text">Tahun (4 digit)</small>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label for="nopes">Acceptable or not?</label>
                            <div class="form-row">
                            <div class="col">
							<select name="status" class="form-control">
                                <option value="accept">Diterima</option>
                                <option value="notaccept">Tidak Diterima</option>
                            </select>
</div>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="">
							<label class="form-check-label" for="statement">
								<p class="small">Dengan ini saya menyatakan bahwa apabila di kemudian hari ditemukan kecurangan yang saya lakukan dalam UTBK-SNBT 2023, maka status penerimaan saya dibatalkan.</p>
							</label>
						</div>
						<button name="search" class="btn btn-primary mt-2" type="submit">Lihat Hasil</button>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
