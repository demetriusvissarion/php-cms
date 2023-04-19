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
$page2Content = $db->selectAll('pages', ['page_content'], ['page_name' => 'page2'])[1]->page_content;
// $page2Content = $db->selectAll('page2')[0]->page2_text;
?>

<p><?php echo $page2Content; ?></p>

<?php require('partials/footer.php') ?>

