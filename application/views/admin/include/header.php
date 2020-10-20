<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>`</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <script src="<?= site_url('assets/tinymce/tinymce.min.js'); ?>" referrerpolicy="origin"></script>
    <script src="<?= site_url('assets/tinymce/init-tinymce.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a href="" class="navbar-brand">Admin pannel</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="<?= base_url('home/index'); ?>" target="_blank" data-toggle="tooltip" class="nav-link" title="view site">view site</a></li>
    </ul>
</nav>

