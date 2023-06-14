<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                            <form action="<?=base_url('/home/search3')?>" method="post">
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
                                <table class="table table-borderless">
                                    <tr>
                                        <th colspan="">Nama Murid</th>
                                        <th colspan="">Details</th>
                                        <th colspan="">Action</th>
                                    </tr>
                                    <?php foreach ($mp as $s) { ?>
                            <tr class="h6 align-middle">
                                <td><?php echo $s->nama_murid ?></td>
                                <td>
                                    <?php foreach ($ma as $m) { ?>
                                        <?php if ($s->user == $m->murid) { ?>
                                            <?php echo $m->tanggal ?>
                                            <td><a href="<?=base_url('/home/ct/' .$m->id_agenda)?>"><button type="submit" class="btn btn-primary">Edit<i class="fa fa-clipboard ms-2"></i></button></td></a>       
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                                <!-- <td><a href="<?=base_url('/home/ct/' .$m->id_agenda)?>"><button type="submit" class="btn btn-warning">Edit<i class="fa fa-clipboard ms-2"></i></button></td></a> -->
                            </tr>
                        <?php } ?>
                                </table>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>