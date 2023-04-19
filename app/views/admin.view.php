<?php require('partials/head.php') ?>

<form method="POST" action="ContentController.php">
    <h2><u>Page 1</u></h2>
    <p>
        <input type="text" name="page1_content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>

<form method="POST" action="ContentController.php">
    <h2><u>Page 2</u></h2>
    <p>
        <input type="text" name="page2_content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>

<form method="POST" action="ContentController.php">
    <h2><u>Page 3</u></h2>
    <p>
        <input type="text" name="page3_content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>

<?php require('partials/footer.php') ?>