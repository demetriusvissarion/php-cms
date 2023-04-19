<?php require('partials/head.php') ?>

<h1>Page 1</h1>

<?php 
    require_once 'core/database/QueryBuilder.php';
    $pdo = new PDO('mysql:host=your_host;dbname=your_db;charset=utf8', 'your_username', 'your_password');
    $db = new QueryBuilder($pdo);
    $page1Content = $db->selectAll('pages')[0]->page1_content;
?>

<p><?php echo $page1Content; ?></p>

<?php require('partials/footer.php') ?>