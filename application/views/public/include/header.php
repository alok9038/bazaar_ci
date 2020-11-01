<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bazaar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <script src="https://kit.fontawesome.com/24429d851b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
</head>
<style>
  .category .nav-item {
    transition:all .3s linear; 
    
    }
  .category .nav-item:hover{
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    
    }
</style>
<body class="">
    
    <nav class="navbar navbar-expand-lg p-0 fixed-top   navbar-light " style="background-color:#feee00;">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/logo.png'); ?>" class="img-fluid" style="height:55px;" alt=""></a>
   
    <form class="form-inline ml-lg-5">
      <div class="input-group">
          <input class=" border search rounded-0" size="80" type="search" placeholder="what are you looking for?" aria-label="Search">
          <div class="input-group-append">
              <button class="btn bg-white border border-left-0 rounded-0 " type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg></button>
          </div>
      </div>
    </form>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
  <a class="nav-link active" href="<?= base_url('user/cart'); ?>" tabindex="-1" aria-disabled="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> <sup><span class="badge badge-danger badge-pill"><?php if($this->session->userdata("admin")): ?><?= count($items); ?><?php else: ?>0<?php endif; ?></span></sup></a>
      </li>
      <?php if($this->session->userdata("admin")): ?>
      <li class="nav-item ">
        <div class="dropdown">
                    <a class="nav-link dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-capitalize"><?= $user->name; ?></span>
                                    <img src="<?= base_url('assets/avatar.png'); ?>" alt="" class="rounded-circle bg-dark" style="height:26px;">
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right border-0 shadow" aria-labelledby="dropdownMenuLink" >
                        <a class="dropdown-item  text-muted small" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 "></i>Profile</a>
                        <a class="dropdown-item text-muted small" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 "></i>Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item text-muted small"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>Logout</a>
                    </div>
                </div>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link active border-left border-secondary" href="<?= base_url('auth/login'); ?>" tabindex="-1" aria-disabled="true">Login</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</div>
</nav>
<nav class="navbar navbar-expand-lg mb-3 navbar-light  shadow-sm  py-0 bg-white" style="top:65px!important;">
    <div class="container">
        <ul class="nav-pills nav navbar-nav category" id="category">
            <li class="nav-item rounded-0"><a href="<?= base_url('home'); ?>" class="nav-link rounded-0" style="font-weight:500;font-size:14px;">Home</a></li>
            <?php foreach($category as $cat): ?>
            <li class="nav-item rounded-0 "><a href="<?= base_url('category/'.$cat->id); ?>" class="nav-link rounded-0 text-capitalize " style="font-weight:500; font-size:14px;"><?= $cat->cat_title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>

<br>



<?php if($msg = $this->session->flashdata('error')): ?>
  <div class="toast ml-auto rounded-0 border-0" role="alert" data-delay="2000" data-autohide="true" style="position: absolute; top: 110px; right: 20px; min-width:300px;min-heigth:100px;">
        <div class="toast-body bg-danger" style='background:#00c851c4;'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light"><?= $msg; ?></p>
         </div>
    </div>
<?php endif; ?>
<?php if($msg = $this->session->flashdata('msg')): ?>
  <div class="toast ml-auto rounded-0 border-0" role="alert" data-delay="2000" data-autohide="true" style="position: absolute; top: 110px; right: 20px; min-width:300px;min-heigth:100px;">
        <div class="toast-body" style='background:#00c851c4;'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light"><?= $msg; ?></p>
         </div>
    </div>
<?php endif; ?>





