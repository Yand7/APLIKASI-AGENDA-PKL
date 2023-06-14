<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                            <form action="<?=base_url('/home/search2')?>" method="post">
                                <div class="form-group col-lg-9 col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input name="tgl" type="Date" class="form-control border-3" formControlName="startDate" id="startDate">
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-warning">Search <i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                            <form action="<?=base_url('/home/update')?>" method="post">
                                    <table class="table table-borderless">
                                        <tr class="align-middle">
                                            <th colspan="10">Nama</th>
                                            <th>Kehadiran</th>
                                            <th>Tanggal</th>

                                        </tr>
                                        <?php
                                            foreach ($mp as $s){
                                        ?>
                                        <tr class="align-middle">
                                                <td colspan="10">
                                                    <input type="hidden" name="idm[]" value="<?php echo $s->user?>">
                                                    <input type="hidden" name="idd[]" value="<?php echo $s->id_absensi?>">
                                                    <?php echo $s->nama_murid?>
                                                </td>
                                                <td>
                                                <select name="kh[]" id="startTime" class="form-control border-3" formControlName="startTime">
                                                    <option value="<?php echo $s->kehadiran?>" hidden><?php echo $s->kehadiran?></option>
                                                    <option value="H">Hadir</option>
                                                    <option value="A">Absen</option>
                                                    <option value="S">Sakit</option>
                                                    <option value="I">Izin</option>
                                                </select>
                                                </td>
                                                <td>
                                                    <input disabled name="tgl[]" type="Date" class="form-control border-3" formControlName="startDate" id="startDate" value="<?php echo $s->tanggal?>">
                                                </td>
                                        </tr>
                                        <?php } ?>  
                                        <tr>
                                            <td>
                                            <button type="submit" class="btn btn-success">Update</i></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>