<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                        <input type="hidden" name="id" value="<?php echo $s->id_agenda?>">
                                        <h2>Data Agenda</h2><span>Tanggal <?php echo $s->tanggal?></span>
                                        <hr></hr>

                                        <h5>Rencana Pekerjaan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->renper1?>" placeholder="Rencana Pekerjaan 1" name="rp1">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->renper2?>" placeholder="Rencana Pekerjaan 2" name="rp2">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->renper3?>" placeholder="Rencana Pekerjaan 3" name="rp3">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->renper4?>" placeholder="Rencana Pekerjaan 4" name="rp4">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->renper5?>" placeholder="Rencana Pekerjaan 5" name="rp5">
                                        </div>

                                        <h5>Realisasi Pekerjaan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->reape1?>" placeholder="Realisasi Pekerjaan 1" name="reap1">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->reape2?>" placeholder="Realisasi Pekerjaan 2" name="reap2">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->reape3?>" placeholder="Realisasi Pekerjaan 3" name="reap3">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->reape4?>" placeholder="Realisasi Pekerjaan 4" name="reap4">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->reape5?>" placeholder="Realisasi Pekerjaan 5" name="reap5">
                                        </div>

                                        <h5>Penugasan Khusus</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pk1?>" placeholder="Penugasan Khusus 1" name="pk1">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pk2?>" placeholder="Penugasan Khusus 2" name="pk2">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pk3?>" placeholder="Penugasan Khusus 3" name="pk3">
                                        </div>

                                        <h5>Penemuan Masalah</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pm1?>" placeholder="Penemuan Masalah 1" name="pm1">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pm2?>" placeholder="Penemuan Masalah 2" name="pm2">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->pm3?>" placeholder="Penemuan Masalah 3" name="pm3">
                                        </div>

                                        <h5>Catatan</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->c1?>" placeholder="Catatan 1" name="c1">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->c2?>" placeholder="Catatan 2" name="c2">
                                        </div>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $s->c3?>" placeholder="Catatan 3" name="c3">
                                        </div>

                                        <h5>Penilaian Harian</h5>
                                        <div class="input-field">
                                            <label class="">Senyum</label>
                                            <select disabled disabled name="kt1" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->senyum?>"><?php echo $s->senyum?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Keramahan</label>
                                            <select disabled name="kt2" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->keramahan?>"><?php echo $s->keramahan?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Penampilan</label>
                                            <select disabled name="kt3" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->penampilan?>"><?php echo $s->penampilan?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Komunikasi</label>
                                            <select disabled name="kt4" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->komunikasi?>"><?php echo $s->komunikasi?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label class="">Realisasi Kerja</label>
                                            <select disabled name="kt5" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->realisasi_kerja?>"><?php echo $s->realisasi_kerja?></option>
                                                <option value="Baik">Baik</option>
                                                <option value="Kurang">Kurang Baik</option>
                                            </select>
                                        </div>

                                        <div>
                                        <a href="<?=base_url('/home/output_ca')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                
            </script>