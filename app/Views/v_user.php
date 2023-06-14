<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <?php
                                      $no=1;
                                      foreach ($vuser as $k){
                                       ?>
                                    <tr>
                                      <td><?php echo $no++?></td>
                                      <td><?php echo $k->username?></td>
                                      <td><?php echo $k->email?></td>
                                      <td><?php echo $k->password?></td>
                                      <td><?php echo $k->nm_level?></td>
                                      <td>
                                        <a href="<?=base_url('/home/reset/' .$k->id_user)?>"><button class="btn btn-danger">Reset</button></a>
                                        <!-- <a href="<?=base_url('/home/d_pm/' .$k->id_data_pm)?>"><button class="btn btn-danger">Delete</button></a> -->
                                      </td>
                                    </tr>
                                    <?php
                                      }
                                    ?>   
                                  </table>
                                  <!-- <a href="<?=base_url('/home/t_user')?>"><button class="btn btn-success">Input New</button></a> -->
                                  <a href="<?=base_url('/home/excel')?>"><button class="btn btn-warning">Import Users</button></a>
                            </div>
                        </div>
                    </div>
                </div>
          </div>