<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bazaar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <script src="https://kit.fontawesome.com/24429d851b.js" crossorigin="anonymous"></script>
</head>
<body class="">
    
    <nav class="navbar navbar-expand-lg p-0 sticky-top  navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/logo.png'); ?>" class="img-fluid" style="height:55px;" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <form class="form-inline mx-auto">
      <div class="input-group">
          <input class="form-control border  rounded-0" size="50" type="search" placeholder="Search here..." aria-label="Search">
          <div class="input-group-append">
              <button class="btn bg-white border border-left-0 rounded-0 " type="submit"><i class="fa fa-search"></i></button>
          </div>
      </div>
    </form>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">cart <sup><span class="badge badge-danger badge-pill">0</span></sup></a>
      </li>
      <li class="nav-item ">
        <div class="dropdown">
                    <a class="nav-link dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-capitalize">Jonh doe</span>
                                    <img src="<?= base_url('assets/avatar.png'); ?>" alt="" class="rounded-circle bg-dark" style="height:26px;">
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item  text-muted small" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 "></i>Profile</a>
                        <a class="dropdown-item text-muted small" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 "></i>Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="http://localhost/oldsale1/auth/logout" class="dropdown-item text-muted small"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>Logout</a>
                    </div>
                </div>
      </li>
      
    </ul>
    
  </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm  py-0 bg-white">
    <div class="container">
        <ul class="navbar-nav category">
            <li class="nav-item"><a href="<?= base_url('home'); ?>" class="nav-link" style="font-weight:500;font-size:14px;">Home</a></li>
            <?php foreach($category as $cat): ?>
            <li class="nav-item"><a href="<?= base_url('home/category/'.$cat->id); ?>" class="nav-link text-capitalize " style="font-weight:500; font-size:14px;"><?= $cat->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
