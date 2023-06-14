<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_fdm2')?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $ab->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $ab->tanggal?></span>
                                        <hr></hr>

                                        <h5>Realisasi Pekerjaan</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->reape1?>" placeholder="Realisasi Pekerjaan 1" name="reap1">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->reape2?>" placeholder="Realisasi Pekerjaan 2" name="reap2">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->reape3?>" placeholder="Realisasi Pekerjaan 3" name="reap3">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->reape4?>" placeholder="Realisasi Pekerjaan 4" name="reap4">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $ab->reape5?>" placeholder="Realisasi Pekerjaan 5" name="reap5">
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Next</button>
                                        <a href="<?=base_url('/home/output_check/' .$ab->id_agenda)?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>