<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_fdm1')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $ab->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $ab->tanggal?></span>
                                        <hr></hr>

                                        <h5>Rencana Pekerjaan</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="" placeholder="Rencana Pekerjaan 1" name="rp1">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="" placeholder="Rencana Pekerjaan 2" name="rp2">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="" placeholder="Rencana Pekerjaan 3" name="rp3">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="" placeholder="Rencana Pekerjaan 4" name="rp4">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="" placeholder="Rencana Pekerjaan 5" name="rp5">
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Next</button>
                                        <a href="<?=base_url('/home/output_check/'.$ab->id_agenda)?>"><button type="button" class="btn btn-warning">Back</button></a>
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