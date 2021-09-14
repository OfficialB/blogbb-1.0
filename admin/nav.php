<?php
include ("../config.php");
include ("../styles.html");
?>
<title><?php echo $sitename; ?> Admin</title>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container">
  <a class="navbar-brand" href="index.php">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $siteurl; ?>">Visit Site</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          General
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="name.php">Site Name</a>
          <a class="dropdown-item" href="siteurl.php">Site URL</a>
          <a class="dropdown-item" href="desc.php">Site Description</a>
          <a class="dropdown-item" href="status.php">Maintenance</a>
          <a class="dropdown-item" href="img.php">Home Image</a>
          <a class="dropdown-item" href="site_a.php">Announcement</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Moderation
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ban.php">IP Ban</a>
          <a class="dropdown-item" href="revoke.php">Revoke Ban</a>
          <a class="dropdown-item" href="info.php">Post Info</a>
          <a class="dropdown-item" href="delete.php">Delete Post</a>
        </div>
      </li>
    </ul>
  </div>
 </div>
</nav>
<br>