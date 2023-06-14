<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3" align="center">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="<?=base_url('/home/absen2/' .session()->get('id'))?>"><button type="submit" class="btn btn-warning">School Attendace</button></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?=base_url('/home/absen')?>"><button type="button" class="btn btn-warning" disabled>Company Attendace</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block bg-white rounded shadow p-3 mb-3">
                                <form action="<?=base_url('/home/search')?>" method="post">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-5">
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
                                        <th colspan="12">Absensi Kehadiran</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </table>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>