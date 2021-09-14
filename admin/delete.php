<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="delete.php" method="post">
    <h3>Remove Blog: </h3>
    <input type="text" name="new" placeholder="Enter an ID.">
    <input type="submit" value="Submit">
  </form>
</div>