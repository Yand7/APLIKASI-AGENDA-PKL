<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                            <form action="<?=base_url('/home/import')?>" method="post" enctype="multipart/form-data">
                                <div class="form-title ms-2">
                                        <h3>Input Form</h3>
                                </div>                
                                <hr class="ms-2 mb-2"></hr>
                                <table class="table table-borderless">
                                    <tr class="align-middle">
                                        <td colspan="8" class="h5">Insert File</td>
                                        <td>
                                            <input type="file" class="form-control" name="file">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-success">Upload</button>
                                            <a href="<?=base_url('/home/user')?>"><button type="button" class="btn btn-warning">Back</button></td></a>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>