<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body class="modal-open" style="overflow: hidden; padding-right: 0px;" data-bs-overflow="hidden" data-bs-padding-right="0px">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-link" href="<?= BASEURL; ?>/siswa">Siswa</a>
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
      </div>
  </div>
</nav>