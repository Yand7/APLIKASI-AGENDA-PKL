<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                            <form action="<?=base_url('/home/aksi_as')?>" method="post">
                                <div class="form-group col-lg-9 col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <select name="jrsn" class="form-control">
                                                <option disable selected hidden value="">Major</option>
                                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                <option value="BDP">Bisnis Daring dan Pemasaran</option>
                                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                            </select>
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
                                        <th class="h5 fw-bold">Nama Murid</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                <?php
                                    foreach($tw as $t){
                                ?>
                                    <tr class="align-middle">
                                        <td><?php echo $t->nama_murid?></td>
                                        <td>
                                            <a href="<?=base_url('/home/assign/' .$t->id_data)?>">
                                                <button type="submit" class="btn btn-dark">Assign<i class="fa fa-edit ms-2"></i></button>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>