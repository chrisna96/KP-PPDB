<section>
    <div class="jumbotron text-white" style="margin-bottom: 0px; background: url(http://localhost/PPDB-tampilan/assets/img/pembayaran.png) no-repeat center center; background-size: cover;">
		<div class="container">
			<div class="judul text-center">
				<h1>Selamat Datang Peserta Didik Baru</h1>
			</div>
			<div class="sub-judul text-center">
				<p>Bagaimana cara memasukan NISN supaya bisa daftar?</p>
				<p><a class="btn btn-primary" data-toggle="modal" data-target="#bayarOnline" role="button">Lihat Disini</a></p>
			</div>
			<!--<div class="lihat-reg text-center mx-auto" style="border-style: solid; border-radius: 10px; width:30%; align-items:center">
				<h5>NISN-mu sudah aktif? Lihat disini!</h5>
				<p><a class="btn btn-primary" href="#" role="button">Lihat</a></p>
			</div>-->
		</div>
	</div>
    <div class="lihat-reg text-white bg-dark" style="padding: 13px 0px 5px 0px;">
		<div class="container">
			<div class="row">
				<div class="reg mx-auto text-center">
					<div class="h5">
						NISN-mu sudah aktif belum?
                        <button type="button" class="btn btn-outline-light">Lihat Selengkapnya</button>
					</div>
					<!--<div class="">
						<button type="button" class="btn btn-outline-light">Lihat Selengkapnya</button>
					</div>-->
				</div>
			</div>
		</div>
	</div>


	<div class="container custom-container">
		<h3 class="text-center" style="padding-bottom: 30px;">PEMBAYARAN PENDAFTARAN</h3>
		<div class="row custom-alert">
			<div class="jumbotron col-md-5 mx-auto">
				<h5>Apabila Anda belum membayar isi form ini: </h5>
				<form>
					<div class="form-group">
						<label>NISN: </label>
						<input type="number" name="nisn" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nomor Registrasi: </label>
						<input type="number" name="registrasi" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nama Pengirim: </label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email: </label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="input_starttime">Waktu: </label>
						<input type="text" id="input_starttime" data-input-mask="99 : 99 : 99" placeholder="13 : 00 : 00" class="form-control timepicker">
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Foto Bukti Transfer</label>
						<input type="file" class="form-control-file" required>
					</div>
					<div class="text-center">
						<p>
							<input type="submit" name="submit" class="btn btn-success" value="Submit">
						</p>
					</div>
				</form>
			</div>
			<div class="border-right"></div>
			<div class="jumbotron col-md-5 align-self-center mx-auto">
				<h5>Apabila Anda sudah membayar isi form ini: </h5>
				<form>
					<div class="form-group mx-auto">
						<label>Masukan Kode: </label>
						<input type="Kode" name="email" class="form-control" required>
					</div>
					<div class="text-center">
						<p>
							<input type="submit" name="submit" class="btn btn-success" value="Submit">
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
