<?php require('partials/head.php') ?>

<form method="POST" action="/app/controllers/ContentController/change1">
    <h2><u>Page 1</u></h2>
    <p>
        <input type="text" name="page1_content" placeholder="new content">
    </p>
    <?php 
    require_once 'app/controllers/ContentController.php';
    $myObj = new \app\controllers\ContentController();
    // var_dump($myObj);
    if (method_exists($myObj, 'change1')) {
        $myObj->change();
        }
    ?>
    <button type="submit" >Submit</button>
</form>

<form method="POST" action="/app/controllers/ContentController/change2">
    <h2><u>Page 2</u></h2>
    <p>
        <input type="text" name="page2_content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>

<form method="POST" action="/app/controllers/ContentController/change3">
    <h2><u>Page 3</u></h2>
    <p>
        <input type="text" name="page3_content" placeholder="new content">
    </p>
    <button type="submit" >Submit</button>
</form>


<?php require('partials/footer.php') ?>