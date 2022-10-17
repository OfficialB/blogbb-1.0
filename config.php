<?php
$host = 'localhost';
$db   = 'database';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
# Don't forget to change these!
$siteinfo = $pdo->query('SELECT * FROM info');
foreach ($siteinfo as $si)
{
    $sitename = $si['name'];
    $sitedesc = $si['description'];
    $sitestatus = $si['maintenance'];
    $siteannouncement = $si['announcement'];
    $siteurl = $si['url'];
    $siteimg = $si['img'];
}
?>