<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_ct3')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $s->tanggal?></span>
                                        <hr></hr>

                                        <h5>Penilaian Harian</h5>
                                        <div class="input-field">
                                            <label class="">Senyum</label>
                                            <select name="kt1" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->senyum?>"><?php echo $s->senyum?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Keramahan</label>
                                            <select name="kt2" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->keramahan?>"><?php echo $s->keramahan?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Penampilan</label>
                                            <select name="kt3" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->penampilan?>"><?php echo $s->penampilan?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Komunikasi</label>
                                            <select name="kt4" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->komunikasi?>"><?php echo $s->komunikasi?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Realisasi Kerja</label>
                                            <select name="kt5" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->realisasi_kerja?>"><?php echo $s->realisasi_kerja?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div>
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a href="<?=base_url('/home/ct2/'.$s->id_agenda)?>"><button type="button" class="btn btn-warning">Back</button></a>
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