<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $sql = "UPDATE info SET name = ?";
    $pdo->prepare($sql)->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="name.php" method="post">
    <h3>Site Name: </h3>
    <input type="text" name="new">
    <input type="submit" value="Submit">
  </form>
</div>