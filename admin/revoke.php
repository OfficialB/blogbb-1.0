<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $stmt = $pdo->prepare("DELETE FROM bans WHERE ip = ?");
    $stmt->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="revoke.php" method="post">
    <h3>Remove IP Ban: </h3>
    <input type="text" name="new">
    <input type="submit" value="Submit">
  </form>
</div>