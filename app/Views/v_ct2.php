<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_ct2')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $s->tanggal?></span>
                                        <hr></hr>

                                        <h5>Catatan</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->c1?>" placeholder="Catatan 1" name="c1">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->c2?>" placeholder="Catatan 2" name="c2">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->c3?>" placeholder="Catatan 3" name="c3">
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Next</button>
                                        <a href="<?=base_url('/home/ct/' .$s->id_agenda)?>"><button type="button" class="btn btn-warning">Back</button></a>
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