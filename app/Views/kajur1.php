<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <h2>List Guru Pembimbing</h2>
                                <hr></hr>
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                      </tr>
                                    </thead>
                                    <?php
                                      $no=1;
                                      foreach ($kajur1 as $k){
                                       ?>
                                    <tr>
                                      <td><?php echo $no++?></td>
                                      <td><?php echo $k->id_user?></td>
                                      <td><?php echo $k->username?></td>
                                      <td></td>
                                      <td><?php echo $k->nm_guru?></td>
                                      <td><?php echo $k->keterangan?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>   
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
          </div>