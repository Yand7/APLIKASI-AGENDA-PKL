<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_ct1')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $s->tanggal?></span>
                                        <hr></hr>

                                        <h5>Penemuan Masalah</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->pm1?>" placeholder="Penemuan Masalah 1" name="pm1">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->pm2?>" placeholder="Penemuan Masalah 2" name="pm2">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->pm3?>" placeholder="Penemuan Masalah 3" name="pm3">
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Next</button>
                                        <a href="<?=base_url('/home/search3')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                
            </script>