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
                <a class="btn btn-success btn-sudah" href="<?php echo base_url();?>index.php/pages/kode">Sudah</a>
                <a class="btn btn-danger btn-sudah" href="<?php echo base_url();?>index.php/pages/registrasi">Belum</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bayarOnline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cara Pembayaran Registrasi Online</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="">
                        <ul class="timeline">
                            <li>
                                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                                <a href="#" class="float-right">21 March, 2014</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </li>
                            <li>
                                <a href="#">21 000 Job Seekers</a>
                                <a href="#" class="float-right">4 March, 2014</a>
                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <a href="#">Awesome Employers</a>
                                <a href="#" class="float-right">1 April, 2014</a>
                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
