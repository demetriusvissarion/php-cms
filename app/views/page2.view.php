<?php require('partials/head.php') ?>

<h1>Page 2</h1>

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
$page2Content = $db->selectAll('admin', ['page_content'], ['id' => 2])[1]->page_content;
?>

<p><?php echo $page2Content; ?></p>

<?php require('partials/footer.php') ?>

