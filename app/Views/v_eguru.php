<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_eguru')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_guru?>">
                                        <h2>Information Detail</h2>
                                        <hr></hr>

                                        <h5>Nama</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nm_guru?>" placeholder="Nama" name="nm">
                                        </div>

                                        <h5>NIK</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nik?>" placeholder="NIK" name="nik">
                                        </div>

                                        <h5>Tanggal Lahir</h5>
                                        <div class="input-field">
                                            <input type="date" class="form-control" value="<?php echo $s->tgl_lahir?>" placeholder="Tanggal Lahir" name="t1">
                                        </div>                                        
                                        
                                        <h5>Tempat Lahir</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->tmpt_lahir?>" placeholder="Tempat Lahir" name="t2">
                                        </div>                                        
                                        
                                        <h5>Keterangan</h5>
                                        <div class="input-field">
                                            <select name="kt" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->keterangan?>">---Choose---</option>
                                                <option value="Pembimbing">Pembimbing</option>
                                                <option value="Kajur AKL">Kajur Akuntansi dan Keuangan Lembaga</option>
                                                <option value="Kajur BDP">Kajur Bisnis Daring dan Pemasaran</option>
                                                <option value="Kajur RPL">Kajur Rekayasa Perangkat Lunak</option>
                                            </select>
                                        </div>
                                        
                                        <h5>No HP</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->no_hp?>" placeholder="No HP" name="nhp">
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