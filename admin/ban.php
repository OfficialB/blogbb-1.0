<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $sql = "INSERT INTO bans (ip) VALUES (?)";
    $pdo->prepare($sql)->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="ban.php" method="post">
    <h3>Add IP Ban: </h3>
    <input type="text" name="new">
    <input type="submit" value="Submit">
  </form>
</div>