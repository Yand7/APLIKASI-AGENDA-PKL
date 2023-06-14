<?php 
if (session()->get('level')== '1' ) {
?>
<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                        <input type="hidden" name="id" value="<?php echo $us->id_user?>">
                                        <h2>User Information</h2>
                                        <hr></hr>

                                        <h5>User's name</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->username?>" placeholder="Username" name="username">
                                        </div>

                                        <h5>User's Email</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->email?>" placeholder="Email" name="email">
                                        </div>

                                        <h5>User's Password</h5>
                                        <div class="input-field">
                                            <input disabled type="password" class="form-control" value="<?php echo $us->password?>" placeholder="Password" name="password">
                                        </div>                                        
                                        
                                        <h5>User's Level</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->nm_level?>" placeholder="Level" name="level">
                                        </div>                                        

                                        <div>
                                        <a href="<?=base_url('/home/e_user/' .session()->get('id'))?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
                                        <!-- <a href="<?=base_url('/home/detail/' .session()->get('id'))?>"><button type="button" class="btn btn-primary"><i class="fa fa-clipboard"></i></button></a> -->
                                        <a href="<?=base_url('/home/mpg')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
}else if (session()->get('level')== '2' || session()->get('level')== 3 || session()->get('level')== 4 || session()->get('level')== 5) {
?>
<div class="main-pages">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3 mb-3">   
                                  
                                <div class="form-wrapper">
                                    <div class="form">
                                        <input type="hidden" name="id" value="<?php echo $us->id_user?>">
                                        <h2>User Information</h2>
                                        <hr></hr>

                                        <h5>User's name</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->username?>" placeholder="Username" name="username">
                                        </div>

                                        <h5>User's Email</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->email?>" placeholder="Email" name="email">
                                        </div>

                                        <h5>User's Password</h5>
                                        <div class="input-field">
                                            <input disabled type="password" class="form-control" value="<?php echo $us->password?>" placeholder="Password" name="password">
                                        </div>                                        
                                        
                                        <h5>User's Level</h5>
                                        <div class="input-field">
                                            <input disabled type="text" class="form-control" value="<?php echo $us->nm_level?>" placeholder="Level" name="level">
                                        </div>                                        

                                        <div>
                                        <a href="<?=base_url('/home/e_user/' .session()->get('id'))?>"><button type="button" class="btn btn-success">Edit Profile</button></a>
                                        <a href="<?=base_url('/home/detail/' .session()->get('id'))?>"><button type="button" class="btn btn-primary"><i class="fa fa-clipboard"></i></button></a>
                                        <a href="<?=base_url('/home/mpg')?>"><button type="button" class="btn btn-warning">Back</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>