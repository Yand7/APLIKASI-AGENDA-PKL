<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_tinstruktur')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_instruktur?>">
                                        <h2>Information Detail</h2>
                                        <hr></hr>

                                        <h5>Nama</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nm_instruktur?>" placeholder="Nama" name="nm">
                                        </div>

                                        <h5>No HP</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->no_hp?>" placeholder="No HP" name="nhp">
                                        </div>                                                                        
                                        
                                        <h5>Tempat Perusahaan</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nm_perusahaan?>" placeholder="Nama Perusahaan" name="np">
                                        </div>                                                                        

                                        <div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="<?=base_url('/home/detail')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>