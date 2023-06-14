<?php 
if (session()->get('level')== '1' ) {
?>
<div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-list fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="#"></a>
                <ul class="nav ms-auto">
                  <li class="nav-item dropdown dropstart text-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                      <img src="<?= base_url('../images/user/def_user.png')?>" alt="User Profile" class="navbar-img-user">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?=base_url('/home/user_s/' .session()->get('id'))?>">User Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url('/home/log_out')?>">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <div class="slider" id="sliders">
              <div class="slider-head">
                  <div class="d-block pt-4 pb-3 px-3">
                    <p class="mb-0 lh-1 text-white">Welcome ! <span>@<?php echo session()->get('username') ?></span></p>
                    <small class="mb-0 lh-1 text-white"><?php echo session()->get('email')?></small>
                  </div>
              </div>
              
              <hr class="soft m-0 bg-white">
              
              <div class="title">
                <p>General</p>
              </div>
    
              <div class="slider-body px-1">
                <ul class="nav flex-column">
                  <a class="nav-link active" href="<?=base_url('/home/mpg')?>">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Dashboard
                  </a>
                </ul>
              </div>
              
              <hr class="soft m-0 bg-white">

              <div class="title">
                <p>Admin Access</p>
              </div>

              <div class="slider-footer">
                <ul class="nav flex-column">
                  <a class="nav-link" href="<?=base_url('/home/user')?>">
                    <i class="fa fa-user box-icon" aria-hidden="true"></i> Users
                  </a>
                </ul>
              </div>
          </div>
<?php 
}else if (session()->get('level')== '2') {
?>
<div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-list fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="#"></a>
                <ul class="nav ms-auto">
                  <li class="nav-item dropdown dropstart text-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                      <img src="<?= base_url('../images/user/def_user.png')?>" alt="User Profile" class="navbar-img-user">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?=base_url('/home/user_s/' .session()->get('id'))?>">User Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url('/home/log_out')?>">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <div class="slider" id="sliders">
              <div class="slider-head">
                  <div class="d-block pt-4 pb-3 px-3">
                    <p class="mb-0 lh-1 text-white">Welcome ! <span>@<?php echo session()->get('username') ?></span></p>
                    <small class="mb-0 lh-1 text-white"><?php echo session()->get('email')?></small>
                  </div>
              </div>
              
              <hr class="soft m-0 bg-white">
              
              <div class="title">
                <p>General</p>
              </div>
    
              <div class="slider-body px-1">
                <ul class="nav flex-column">
                  <a class="nav-link active" href="<?=base_url('/home/mpg')?>">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Dashboard
                  </a>
                  <a class="nav-link" href="<?= base_url('Home/cek_agenda')?>">
                    <i class="fa fa-book box-icon" aria-hidden="true"></i> Agenda Check
                  </a>
                </ul>
              </div>
              
          </div>
<?php 
}else if (session()->get('level')== '3') {
?>
<div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-list fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="#"></a>
                <ul class="nav ms-auto">
                  <li class="nav-item dropdown dropstart text-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                      <img src="<?= base_url('../images/user/def_user.png')?>" alt="User Profile" class="navbar-img-user">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?=base_url('/home/user_s/' .session()->get('id'))?>">User Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url('/home/log_out')?>">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <div class="slider" id="sliders">
              <div class="slider-head">
                  <div class="d-block pt-4 pb-3 px-3">
                    <p class="mb-0 lh-1 text-white">Welcome ! <span>@<?php echo session()->get('username') ?></span></p>
                    <small class="mb-0 lh-1 text-white"><?php echo session()->get('email')?></small>
                  </div>
              </div>
              
              <hr class="soft m-0 bg-white">
              
              <div class="title">
                <p>General</p>
              </div>
    
              <div class="slider-body px-1">
                <ul class="nav flex-column">
                  <a class="nav-link active" href="<?=base_url('/home/mpg')?>">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Dashboard
                  </a>
                </ul>
              </div>
          </div>
<?php 
}else if (session()->get('level')== '4') {
?>
<div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-list fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="#"></a>
                <ul class="nav ms-auto">
                  <li class="nav-item dropdown dropstart text-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                      <img src="<?= base_url('../images/user/def_user.png')?>" alt="User Profile" class="navbar-img-user">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?=base_url('/home/user_s/' .session()->get('id'))?>">User Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url('/home/log_out')?>">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <div class="slider" id="sliders">
              <div class="slider-head">
                  <div class="d-block pt-4 pb-3 px-3">
                    <p class="mb-0 lh-1 text-white">Welcome ! <span>@<?php echo session()->get('username') ?></span></p>
                    <small class="mb-0 lh-1 text-white"><?php echo session()->get('email')?></small>
                  </div>
              </div>
              
              <hr class="soft m-0 bg-white">
              
              <div class="title">
                <p>General</p>
              </div>
    
              <div class="slider-body px-1">
                <ul class="nav flex-column">
                  <a class="nav-link active" href="<?=base_url('/home/mpg')?>">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Dashboard
                  </a>
                  <a class="nav-link" href="<?= base_url('Home/search3')?>">
                    <i class="fa fa-book box-icon" aria-hidden="true"></i> Agenda
                  </a>
                </ul>
              </div>
          </div>
<?php 
}else if (session()->get('level')== '5') {
?>
<div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light py-1">
            <div class="container-fluid">
              <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-list fa-lg" aria-hidden="true"></i>
              </button>
              <a class="navbar-brand" href="#"></a>
                <ul class="nav ms-auto">
                  <li class="nav-item dropdown dropstart text-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                      <img src="<?= base_url('../images/user/def_user.png')?>" alt="User Profile" class="navbar-img-user">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?=base_url('/home/user_s/' .session()->get('id'))?>">User Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url('/home/log_out')?>">LogOut</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>

          <div class="slider" id="sliders">
              <div class="slider-head">
                  <div class="d-block pt-4 pb-3 px-3">
                    <p class="mb-0 lh-1 text-white">Welcome ! <span>@<?php echo session()->get('username') ?></span></p>
                    <small class="mb-0 lh-1 text-white"><?php echo session()->get('email')?></small>
                  </div>
              </div>
              
              <hr class="soft m-0 bg-white">
              
              <div class="title">
                <p>General</p>
              </div>
    
              <div class="slider-body px-1">
                <ul class="nav flex-column">
                  <a class="nav-link active" href="<?=base_url('/home/mpg')?>">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Dashboard
                  </a>
                  <a class="nav-link" href="<?=base_url('/home/kajur1')?>">
                    <i class="fa fa-user box-icon" aria-hidden="true"></i> List Pembimbing
                  </a>
                  <a class="nav-link" href="<?=base_url('/home/kajur2')?>">
                    <i class="fa fa-user box-icon" aria-hidden="true"></i> List Instruktur
                  </a>
                  <a class="nav-link" href="<?=base_url('/home/as')?>">
                    <i class="fa fa-user box-icon" aria-hidden="true"></i> Supervisor
                  </a>
                </ul>
              </div>

              <div class="slider-footer">
                
              </div>
          </div>
<?php } ?>