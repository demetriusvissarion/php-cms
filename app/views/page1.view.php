<?php require('partials/head.php') ?>

<h1>Page 1</h1>

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
$page1Content = $db->selectAll('admin', ['page_content'], ['id' => 1])[0]->page_content;
?>

<p><?php echo $page1Content; ?></p>

<?php require('partials/footer.php') ?>