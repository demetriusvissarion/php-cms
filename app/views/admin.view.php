<?php require('partials/head.php'); ?>

<h1>Admin section - Manage Content</h1>
<h3>Current content</h3>
<?php
$page_number = 1;
foreach ($admin as $page) : ?>
    <h4><?php 
    echo "Page $page_number";
    $page_number += 1;
    ?></h4>
	<li><?= $page->page_content; ?></li>
<?php endforeach; ?>

<form method="POST" action="/admin">
    <h2><u>Page 1</u></h2>
    <input type="text" name="name" placeholder="new content">
    <input type="hidden" name="id" value="1">
    <!-- <input type="hidden" name="table" value="admin"> -->
    <button type="submit">Store</button>
</form>

<!-- <form method="POST" action="ContentController.php">
    <h2><u>Page 2</u></h2>
    <p>
        <input type="text" name="Page2_Content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>

<form method="POST" action="ContentController.php">
    <h2><u>Page 3</u></h2>
    <p>
        <input type="text" name="Page3_Content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form> -->

<?php require('partials/footer.php'); ?>