<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">                   
                                <div class="form-wrapper">
                                    <div class="form">
                                        <form action="<?= base_url('Home/output_euser')?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $vuser->id_user?>">
                                        <div class="input-field">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="<?php echo $vuser->username?>" placeholder="Username" name="username">
                                        </div>

                                        <div class="input-field">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $vuser->email?>" placeholder="Email" name="email">
                                        </div>

                                        <div class="input-field">
                                            <label>Password</label>
                                            <input type="password" class="form-control" value="<?php echo $vuser->password?>" placeholder="Password" name="password">
                                        </div>

                                        <div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="<?=base_url('/home/user_s')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>