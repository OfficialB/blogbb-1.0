<?php
include ("nav.php");
if (!empty($_POST['status'])) {
    $sql = "UPDATE info SET maintenance = ?";
    $pdo->prepare($sql)->execute([$_POST['status']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="status.php" method="post">
    <h3>Site Status: </h3>
    <select name="status">
        <option value="0">SELECT</option>
        <option value="2">Online</option>
        <option value="1">Offline</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</div>