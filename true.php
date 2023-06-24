<div class="container">
		<div class="box">
			<div class="card">

				<div class="row">
					<div class="col-12 col-sm-5 d-sm-block">
						<img src="assets/img/logo-header.png" class="img-fluid header-img" alt="Logo SNPMB" />
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-12 text-center">
						<span class="title">PENGUMUMAN HASIL SELEKSI SNBT SNPMB 2023</span>
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-12 col-sm-5">
						<img id="qr-terima" class="img-fluid" src="assets/img/qr.png" alt="qrcode">
					</div>
					<div class="col-12 col-sm-7">
						<div class="row no-gutters mt-3">
							<div class="col-auto col-sm-3">
								Nomor peserta
							</div>
							<div class="col col-sm-1">
								:
							</div>
							<div class="col-12 col-sm-8" style="font-weight: bold;">
								<span id="no-peserta"><?=$nopeserta?></span>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-auto col-sm-3">
								Nama
							</div>
							<div class="col col-sm-1">
								:
							</div>
							<div class="col-12 col-sm-8" style="font-weight: bold;">
								<span id="nama-peserta"><?=strtoupper($namapes)?></span>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-auto col-sm-3">
								Tanggal lahir
							</div>
							<div class="col col-sm-1">
								:
							</div>
							<div class="col-12 col-sm-8" style="font-weight: bold;">
								<span id="tgllahir-peserta"><?=$dateofbirth?></span>
							</div>	
						</div>
						<br>
						<div class="row">
							<div class="col-12">
								<span style="font-size: 1.1em;"><strong>Selamat! Anda dinyatakan lulus seleksi SNBT SNPMB 2023</strong> di</span>
							</div>
						</div>
						<br>
						<div class="row no-gutters">
							<div class="col-auto col-sm-3">
								PTN
							</div>
							<div class="col col-sm-1">
								:
							</div>
							<div class="col-12 col-sm-8">
								<span style="font-size: 1.1em; font-weight: bold;"><span id="kode-ptn"></span> <?=$kode?> <span id="nama-ptn-terima"></span></span>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-auto col-sm-3">
								Program Studi
							</div>
							<div class="col col-sm-1">
								:
							</div>
							<div class="col-10 col-sm-8">
								<span style="font-size: 1.1em; font-weight: bold;"><span id="kode-prodi"></span> <?=$prodi?> <span id="nama-prodi-terima"></span></span>
							</div>
						</div>
						<br>
						<div class="row" id="bidik-misi" style="display: none;">
							<div class="col-12">
								<p style="color: red;">Anda sebagai pendaftar  Program  Indonesia  Pintar  Pendidikan  Tinggi,  calon  pemegang  Kartu Indonesia Pintar Kuliah (KIP Kuliah) harus lolos verifikasi terhadap data akademik dan verifikasi  data  ekonomi  melalui  dokumen  dan/atau  kunjungan  ke  alamat  tinggal Peserta.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<span>Persyaratan pendaftaran ulang calon mahasiswa baru dapat dilihat di <a id="url-daftar" target="_blank" href="">sini</a>.</span>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-12">
								<span>Anda dapat mencetak kembali Kartu Tanda Peserta UTBK-SNBT 2023 di <a target="_blank" href="https://portal-snpmb.bppp.kemdikbud.go.id/">sini</a>.</span>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-12">
								<a class="btn btn-block btn-info btn-wrap-text flash-button" target="_blank" href="#">UNDUH PENGUMUMAN KETUA SNPMB (PDF)</a>
							</div>
						</div>
						
					</div>
				</div>

				<div class="void"></div>

				<div class="row mt-2">
					<div class="col-12">
						<a class="btn btn-block btn-success" href="index.php">Kembali ke pencarian</a>
					</div>
				</div>
			</div>
		</div>
	</div>