<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bazaar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="#">Bazaar | online sabkuch</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <form class="form-inline mx-auto">
      <div class="input-group">
          <input class="form-control rounded-0" size="50" type="search" placeholder="Search here..." aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-secondary rounded-0 " type="submit">Search</button>
          </div>
      </div>
    </form>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">cart <sup><span class="badge badge-danger bage-pill">0</span></sup></a>
      </li>
      <li class="nav-item dropdown d-flex">
        <a class="nav-link dropdown active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span><img src="<?= base_url('assets/avatar.png'); ?>" class="img-fluid" style="height:25px;" alt=""></span> John doe
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    
  </div>
  </div>
</nav>
