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
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->nm_instruktur?>" placeholder="Nama" name="nm">
                                        </div>                        
                                        
                                        <h5>No HP</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->no_hp?>" placeholder="No HP" name="nhp">
                                        </div>                                                                             
                                        
                                        <h5>Tempat Perusahaan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $dt->nm_perusahaan?>" placeholder="Nama Perusahaan" name="nhp">
                                        </div>                                                                             

                                        <div>
                                        <?php 
                                        if ($dt->user==session()->get('id')){
                                        ?>
                                        <a href="<?=base_url('/home/e_instruktur/' .$dt->id_instruktur)?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
                                        <?php
                                          }else if($dt->user==""){
                                        ?>
                                        <a href="<?=base_url('/home/t_instruktur')?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
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