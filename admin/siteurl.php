<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $sql = "UPDATE info SET url = ?";
    $pdo->prepare($sql)->execute([$_POST['new']]);
    header ("Location: index.php");
}
?>
<div class="container">
  <form action="siteurl.php" method="post">
    <h3>Site URL: </h3>
    <input type="text" name="new" placeholder="Add trailing slash... (Example: http://example.com/)">
    <input type="submit" value="Submit">
  </form>
</div>