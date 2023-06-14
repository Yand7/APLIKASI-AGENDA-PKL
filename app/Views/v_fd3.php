<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_fdm3')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $ab->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $ab->tanggal?></span>
                                        <hr></hr>

                                        <h5>Penugasan Khusus</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->pk1?>" placeholder="Penugasan Khusus 1" name="pk1">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->pk2?>" placeholder="Penugasan Khusus 2" name="pk2">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->pk3?>" placeholder="Penugasan Khusus 3" name="pk3">
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="<?=base_url('/home/fd_murid2/' .$ab->id_agenda)?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>