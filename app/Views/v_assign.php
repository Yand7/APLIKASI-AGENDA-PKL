<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_assign')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_data?>">
                                        <h2>Information Detail</h2>
                                        <hr></hr>

                                        <h5>Guru Pembimbing</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->guru_p?>" placeholder="ID Guru" name="g">
                                        </div>

                                        <h5>Instruktur</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->instruktur?>" placeholder="ID Instruktur" name="i">
                                        </div>                                                                   

                                        <div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="<?=base_url('/home/aksi_as')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>