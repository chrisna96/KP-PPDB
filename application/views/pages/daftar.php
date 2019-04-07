<section>
	<div class="container">
		<div class="siswa">
			<h3>DATA SISWA</h3>
		</div>
		<form>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label>NISN: </label>
					<input type="number" class="form-control" required>
				</div>
				<div class="form-group col-md-6">
					<label>Nama: </label>
					<input type="text" class="form-control" required>
				</div>
				<div class="form-group col-md-3">
					<label>Jenis Kelamin: </label>
					<select id="jenis-kelamin" class="form-control" required>
						<option selected>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Tempat Lahir: </label>
					<input type="alamat" class="form-control" required>
				</div>	
				<div class="form-group col-md-6">
					<label>Tanggal Lahir: </label>
					<input type="date" class="form-control" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Agama: </label>
					<select id="agama" class="form-control" required>
						<option selected>Islam</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Kristen</option>
						<option>Katolik</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Status dalam keluarga: </label>
					<select id="status" class="form-control" required> 
						<option>Anak Kandung</option>
						<option>Anak Angkat</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Nomor Telepon: </label>
					<input type="number" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Tempat Tinggal: </label>
				<div class="row col-md-12 px-0 mx-0">
					<textarea rows="5" cols="200"></textarea>
				</div>
			</div>
		</form>

		<div class="pilihan text-center d-none">
			<h4>PIlih Pengisian Data</h4>
			<p><button type="button" class="btn btn-primary">Orang Tua</button> atau <button type="button" class="btn btn-success">Wali</button></p>
		</div>

		<div class="form-orangtua">
			<div class="siswa">
				<h3>DATA ORANG TUA</h3>
			</div>
			<form>
				<div class="form-group">
					<label>Nama Ayah: </label>
					<input type="text" class="form-control" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Pendidikan Terakhir: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>TK</option>
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D1</option>
							<option>D2</option>
							<option>D3</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Pekerjaan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Buruh</option>
							<option>Tani</option>
							<option>PNS</option>
							<option>BUMN</option>
							<option>Swasta</option>
							<option>Wiraswasta</option>
							<option>Lainnya</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Penghasilan Per Bulan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Kurang dari Rp 500.000</option>
							<option>Rp 500.000 - Rp 1.000.000</option>
							<option>Rp 1.000.000 - Rp 3.000.000</option>
							<option>Rp 3.000.000 - Rp 5.000.000</option>
							<option>Lebih dari Rp 5.000.000</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Nomor Telepon: </label>
						<input type="number" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label>Nama Ibu: </label>
					<input type="text" class="form-control" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Pendidikan Terakhir: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>TK</option>
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D1</option>
							<option>D2</option>
							<option>D3</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Pekerjaan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Buruh</option>
							<option>Tani</option>
							<option>PNS</option>
							<option>BUMN</option>
							<option>Swasta</option>
							<option>Wiraswasta</option>
							<option>Lainnya</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Penghasilan Per Bulan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Kurang dari Rp 500.000</option>
							<option>Rp 500.000 - Rp 1.000.000</option>
							<option>Rp 1.000.000 - Rp 3.000.000</option>
							<option>Rp 3.000.000 - Rp 5.000.000</option>
							<option>Lebih dari Rp 5.000.000</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Nomor Telepon: </label>
						<input type="number" class="form-control" required>
					</div>
				</div>
			</form>	
		</div>

		<div class="form-wali">
			<div class="siswa">
				<h3>DATA WALI</h3>
			</div>
			<form>
				<div class="form-group">
					<label>Nama Wali: </label>
					<input type="text" class="form-control" required>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Pendidikan Terakhir: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>TK</option>
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D1</option>
							<option>D2</option>
							<option>D3</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Pekerjaan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Buruh</option>
							<option>Tani</option>
							<option>PNS</option>
							<option>BUMN</option>
							<option>Swasta</option>
							<option>Wiraswasta</option>
							<option>Lainnya</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Penghasilan Per Bulan: </label>
						<select id="pendidikan-ayah" class="form-control" required>
							<option>Kurang dari Rp 500.000</option>
							<option>Rp 500.000 - Rp 1.000.000</option>
							<option>Rp 1.000.000 - Rp 3.000.000</option>
							<option>Rp 3.000.000 - Rp 5.000.000</option>
							<option>Lebih dari Rp 5.000.000</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Nomor Telepon: </label>
						<input type="number" class="form-control" required>
					</div>
				</div>
			</form>
		</div>

		<div class="next-button text-center next">
			<p>
				<button type="btn" class="btn btn-danger">Reset</button>
				<button type="btn" class="btn btn-primary" data-toggle="modal" data-target="#pilihIsiData">Selanjutnya</button>
			</p>
		</div>
	</div>
</section>