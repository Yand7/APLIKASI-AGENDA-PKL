<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3" align="center">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="<?=base_url('/home/absen2/' .session()->get('id'))?>"><button type="submit" class="btn btn-warning" disabled>School Attendace</button></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?=base_url('/home/absen')?>"><button type="button" class="btn btn-warning">Company Attendace</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                            <form action="<?=base_url('/home/submit_menu')?>" method="post">
                                <div class="form-group col-lg-9 col-md-9 col-sm-9">
                                    <div class="row">
                                        <!-- <div class="col-md-4">
                                            <select id="startTime" class="form-control border-3" formControlName="startTime">
                                                <option value="">Major</option>
                                                <option value="">AKL</option>
                                                <option value="">BDP</option>
                                                <option value="">RPL</option>
                                            </select>
                                        </div> -->
                                        <div class="col-md-3">
                                            <input name="tgl1" type="Date" class="form-control border-3" formControlName="startDate" id="startDate">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="tgl2" type="Date" class="form-control border-3" formControlName="startDate" id="startDate">
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-warning">Search <i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                            </div>

                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <h2>Absensi Mingguan</h2>
                                <!-- <p><?php echo $dt->nama_murid?> || <span class="fw-bold"><?php echo $dt->jurusan?></span></p> -->
                                <hr></hr>
                                
                                <table class="table table-striped">
                                    <tr align="center">
                                        <th class="table-dark">Tanggal</th>
                                        <th class="table-dark">Keterangan</th>
                                    </tr>
                                    <?php
                                            foreach ($f as $s){
                                        ?>
                                    <tr align="center">
                                        <td><?php echo $s->tanggal?></td>
                                        <td><?php echo $s->kehadiran?></td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                            
                            <!-- <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <h5>Past Attendance</h5>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>