<?php

if ($sitestatus == 1) {
    header ("Location: " . $siteurl . "/offline"); # fixed the offline redirect - b
}

if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$bc = 'SELECT count(*) FROM bans WHERE ip = ?'; 
$result = $pdo->prepare($bc); 
$result->execute([$ip_address]); 
$number_of_rows = $result->fetchColumn();

if ($number_of_rows > 0) {
    header ("Location: " . $siteurl . "error?e=401");
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<div class="container">
  <a class="navbar-brand" href="<?php echo $siteurl; ?>"><?php echo $sitename; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteurl; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blogs">Entries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="post">Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="credits">Credits</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<br><br><div class="alert alert-warning" role="alert"><div class="container"><center><?php echo $siteannouncement; ?></center></div></div>