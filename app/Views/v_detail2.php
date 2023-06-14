<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                        <input type="hidden" name="id" value="<?php echo $dt->user?>">
                                        <h2>Information Detail</h2>
                                        <hr></hr>

                                        <h5>Nama</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->nama_murid?>" placeholder="Nama" name="nm">
                                        </div>

                                        <h5>NIS</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->nis?>" placeholder="NIS" name="nis">
                                        </div>

                                        <h5>Tempat Tanggal Lahir</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->tmpt_lahir?>, <?php echo $dt->tgl_lahir?>" placeholder="Tanggal Lahir" name="t1">
                                        </div>                                                                        
                                        
                                        <h5>Jurusan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->jurusan?>" placeholder="Keterangan" name="kt">
                                        </div>                                        
                                        
                                        <h5>No HP</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->no_hp?>" placeholder="No HP" name="nhp">
                                        </div>                                                                             
                                        
                                        <h5>Tempat Perusahaan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->tmpt_perusahaan?>" placeholder="Nama Perusahaan" name="nhp">
                                        </div>                                                                             

                                        <div>
                                        <?php 
                                        if ($dt->user==session()->get('id')){
                                        ?>
                                        <a href="<?=base_url('/home/e_murid/' .$dt->id_data)?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
                                        <?php
                                          }else if($dt->user==""){
                                        ?>
                                        <a href="<?=base_url('/home/t_murid')?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
                                        <?php
                                          }
                                        ?>
                                        
                                        <a href="<?=base_url('/home/user_s')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>