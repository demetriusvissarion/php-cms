<?php require('partials/head.php') ?>

<h1>Page 3</h1>

<?php 
require_once 'core/database/QueryBuilder.php';
$config = require 'config.php';
$pdo = new PDO(
    $config['database']['connection'] . ';dbname=' . $config['database']['name'] . ';charset=utf8',
    $config['database']['username'],
    $config['database']['password'],
    $config['database']['options']
);
$db = new QueryBuilder($pdo);
$page3Content = $db->selectAll('page3')[0]->page3_text;
?>

<p><?php echo $page3Content; ?></p>

<?php require('partials/footer.php') ?>