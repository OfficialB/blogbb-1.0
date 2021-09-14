<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $sql = "UPDATE info SET announcement = ?";
    $pdo->prepare($sql)->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="site_a.php" method="post">
    <h3>Announcement: </h3>
    <input type="text" name="new" placeholder="HTML Allowed">
    <input type="submit" value="Submit">
  </form>
</div>