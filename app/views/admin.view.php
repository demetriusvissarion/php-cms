<?php require('partials/head.php'); ?>

<h1>Admin section - Manage Content</h1>
<h2>Current Content:</h2>
<?php
$page_number = 1;
foreach ($admin as $page) : ?>
    <h4><?php 
    echo "Page $page_number";
    $page_number += 1;
    ?></h4>
	<li><?= $page->page_content; ?></li>

<?php endforeach; ?>

<br>
<br>

<h2>Change Content:</h2>

<form method="POST" action="/admin/page1_store">
    <h3><u>Page 1</u></h3>
    <input type="text" name="name" placeholder="new content">
    <input type="hidden" name="id" value="1">
    <button type="submit">Store</button>
</form>

<form method="POST" action="/admin/page2_store">
    <h3><u>Page 2</u></h3>
    <input type="text" name="name" placeholder="new content">
    <input type="hidden" name="id" value="2">
    <button type="submit">Store</button>
</form>

<form method="POST" action="/admin/page3_store">
    <h3><u>Page 3</u></h3>
    <input type="text" name="name" placeholder="new content">
    <input type="hidden" name="id" value="3">
    <button type="submit">Store</button>
</form>

<?php require('partials/footer.php'); ?>