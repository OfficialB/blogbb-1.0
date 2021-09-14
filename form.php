<?php

include ("config.php");

if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$views = 0;
$currentdate = date("l, M. jS, Y - g:i:s A [T]");

if (isset($_POST['title']) && isset($_POST['body']) && isset($_POST['email'])) {
    if (strlen($_POST['title']) > 30 or strlen($_POST['title']) < 3 or strlen($_POST['body']) > 60000 or strlen($_POST['body']) < 10 or strlen($_POST['email']) > 60 or strlen($_POST['email']) < 7) {
        header ("Location: " . $siteurl . "post?e=1");
    } else {
        $sql = "INSERT INTO blogs (email, title, body, ip, views, post_date) VALUES (?,?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([htmlspecialchars($_POST['email']), htmlspecialchars($_POST['title']), htmlspecialchars($_POST['body']), $ip, $views, $currentdate]);

        $num = 0;
        $stmt = $pdo->query('SELECT * FROM blogs');
        foreach ($stmt as $count)
        {
            $num = $num + 1;
        }

        header ("Location: " . $siteurl . "blog?id=" . $num);
    }
} else {
    header ("Location: " . $siteurl . "post?e=2");
}
?>