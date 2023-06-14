<?php 
if (session()->get('level')== '1' ) {
?>
<div class="main-pages">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/renper')?>">Rencana Pekerjaan</a></h2>
                      <p>Data rencana pekerjaan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/reape')?>">Realisasi Pekerjaan</a></h2>
                      <p>Data realisasi pekerjaan... </p>
                  </div>
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pk')?>">Penugasan Khusus</a></h2>
                      <p>Data penugasan khusus... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pm')?>">Penemuan Masalah</a></h2>
                      <p>Data penemuan masalah... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/ph')?>">Penilaian Harian</a></h2>
                      <p>Data penilaian harian... </p>
                  </div>
                  
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/catatan')?>">Catatan</a></h2>
                      <p>Data catatan... </p>
                  </div>
              </div>
          </div>
      </div>
</div>
<?php 
}else if (session()->get('level')== '2') {
?>
<div class="main-pages">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/renper')?>">Rencana Pekerjaan</a></h2>
                      <p>Data rencana pekerjaan murid... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/reape')?>">Realisasi Pekerjaan</a></h2>
                      <p>Data realisasi pekerjaan murid... </p>
                  </div>
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pk')?>">Penugasan Khusus</a></h2>
                      <p>Data penugasan khusus murid dari pembimbing perusahaan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pm')?>">Penemuan Masalah</a></h2>
                      <p>Data penemuan masalah murid pada perusahaan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/ph')?>">Penilaian Harian</a></h2>
                      <p>Data penilaian harian murid... </p>
                  </div>
                  
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/catatan')?>">Catatan</a></h2>
                      <p>Data catatan dari perusahaan untuk murid... </p>
                  </div>
              </div>
          </div>
      </div>
</div>
<?php 
}else if (session()->get('level')== '3') {
?>
<div class="main-pages">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/renper')?>">Rencana Pekerjaan</a></h2>
                      <p>Isi rencana pekerjaan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/reape')?>">Realisasi Pekerjaan</a></h2>
                      <p>Isi realisasi pekerjaan... </p>
                  </div>
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pk')?>">Penugasan Khusus</a></h2>
                      <p>Isi jika ada penugasan dari pembimbing perusahaan yang tidak sesuai dengan jurusan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/pm')?>">Penemuan Masalah</a></h2>
                      <p>Isi jika ada penemuan masalah pada perusahaan... </p>
                  </div>

                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/ph')?>">Penilaian Harian</a></h2>
                      <p>Isi penilaian harian disini... </p>
                  </div>
                  
                  <div class="d-block bg-white rounded shadow p-3 mb-3">
                      <h2><a class="mp-link" href="<?=base_url('/home/catatan')?>">Catatan</a></h2>
                      <p>Isi jika ada catatan dari perusahaan... </p>
                  </div>
              </div>
          </div>
      </div>
</div>
<?php }?>