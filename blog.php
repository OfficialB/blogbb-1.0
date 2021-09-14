<?php include ("includes.php"); ?>
<?php
if (empty($_GET['id'])) {
    header ("Location: " . $siteurl . "blogs");
}

$q = $pdo->prepare('SELECT * FROM `blogs` WHERE id = :id');
$q->bindParam('id', $_GET['id'], PDO::PARAM_STR);
$q->execute();

foreach($q as $row)
{

    $title = $row['title'];
    $body = $row['body'];
    $pid = $row['id'];
    $pdate = $row['post_date'];
    $pviews = $row['views'];
    $pemail = $row['email'];

}

$newviews = $pviews + 1;

$sql = "UPDATE blogs SET views=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$newviews, $_GET['id']]);
?>
<title><?php echo ($title . " - " . $sitename); ?></title>
<div class="container">
    <h1><?php echo $title; ?></h1>
    <p><i><?php echo $pdate; ?></i></p>
    <p><i><?php echo $pviews; ?> view(s)</i></p>
    <p><b><i>By: <?php echo $pemail; ?></i></b></p>
    <p>
    <?php echo $body; ?>
    </p>
</div>
<br>
<br>
<br>
<br>