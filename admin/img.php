<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $sql = "UPDATE info SET img = ?";
    $pdo->prepare($sql)->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="img.php" method="post">
    <h3>Site Image: </h3>
    <input type="text" name="new" placeholder="Enter an image URL.">
    <input type="submit" value="Submit">
  </form>
</div>