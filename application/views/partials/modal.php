<!-- Modal pengisian Data Orang Tua atau Wali -->
<div class="modal fade" id="pilihIsiData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">PENGISIAN DATA</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Anda memilih untuk mengisi data orang tua atau wali?
			</div>
			<div class="modal-footer mx-auto">
				<button type="button" class="btn btn-success btn-orangtua" data-dismiss="modal">Orang Tua</button>
				<button type="button" class="btn btn-primary btn-wali" data-dismiss="modal">Wali</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="registrasiDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">REGISTRASI PENDAFTARAN</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Apakah Anda sudah membayar pendaftaran?
			</div>
			<div class="modal-footer mx-auto">
				<a class="btn btn-success btn-sudah" href="<?php echo base_url();?>index.php/pages/daftar">Sudah</a>
				<a class="btn btn-danger btn-sudah" href="<?php echo base_url();?>index.php/pages/registrasi">Belum</a>
			</div>
		</div>
	</div>
</div>