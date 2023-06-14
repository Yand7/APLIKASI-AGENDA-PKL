<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                    <form action="<?= base_url('Home/output_emurid')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $s->id_data?>">
                                        <h2>Information Detail</h2>
                                        <hr></hr>

                                        <h5>Nama</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nama_murid?>" placeholder="Nama" name="nm">
                                        </div>

                                        <h5>NIS</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->nis?>" placeholder="NIS" name="nis">
                                        </div>

                                        <h5>Tanggal Lahir</h5>
                                        <div class="input-field">
                                            <input type="date" class="form-control" value="<?php echo $s->tgl_lahir?>" placeholder="Tanggal Lahir" name="t1">
                                        </div>                                        
                                        
                                        <h5>Tempat Lahir</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->tmpt_lahir?>" placeholder="Tempat Lahir" name="t2">
                                        </div>                                        
                                        
                                        <h5>Jurusan</h5>
                                        <div class="input-field">
                                            <select name="jrsn" class="form-control">
                                                <option disable selected hidden value="<?php echo $s->jurusan?>">---Choose---</option>
                                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                            </select>
                                        </div>
                                        
                                        <h5>No HP</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->no_hp?>" placeholder="No HP" name="nhp">
                                        </div>                                                                        
                                        
                                        <h5>Tempat Perusahaan</h5>
                                        <div class="input-field">
                                            <input type="text" class="form-control" value="<?php echo $s->tmpt_perusahaan?>" placeholder="Nama Perusahaan" name="np">
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