<?php
 /**
  * Project:		Retention Management System
  * Copyright:		(C) JGinn 2017
  * FileCreated:	171203
  */
?>
<html>
 <head>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/reten/config/DBVar.php"); ?>
  <link rel="stylesheet" href="<?php echo $environment; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $environment; ?>/css/custom.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo $environment; ?>/js/jquery.js"></script>
  <script src="<?php echo $environment; ?>/js/jquery.slidereveal.min.js"></script>
 </head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo $environment; ?>index.php">RMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo $environment; ?>admin/profile.php">Profile</a>
          <a class="dropdown-item" href="<?php echo $environment; ?>admin/logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br>