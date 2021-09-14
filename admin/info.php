<?php
include ("nav.php");
if (!empty($_POST['new'])) {
    $stmt = $pdo->query('SELECT * FROM blogs');
    foreach ($stmt as $row)
    {
        $selectedtitle = $row['title'];
        $selectedip = $row['ip'];
    }
    echo ('<div class="container"><h4>' . $selectedtitle . '</h4><br><h5>' . $selectedip . '</h5></div><br>');
}
?>
<div class="container">
  <form action="info.php" method="post">
    <h3>Post to IP: </h3>
    <input type="text" name="new" placeholder="Enter an ID.">
    <input type="submit" value="Submit">
  </form>
</div>