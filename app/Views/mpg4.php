<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="d-block bg-white rounded shadow p-3 mb-3">
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
                            </div> -->
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <h3 class="mb-4">List murid</h3>
                                <table class="table table-striped font-100">
                                    <tr align="center" class="h5"> 
                                        <th class="table-dark">Nama Murid</th>
                                        <th class="table-dark">NIS</th>
                                        <th class="table-dark"></th>
                                    </tr>
                                        <?php
                                            foreach ($mp as $s){
                                        ?>
                                            <tr align="center" class="h6">
                                                <td><?php echo $s->nama_murid?></td>
                                                <td><?php echo $s->nis?></td>
                                                <td><input type="hidden" name="idm[]" value="<?php echo $s->user?>"></td>
                                            </tr>
                                        <?php }?>
                                </table>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>