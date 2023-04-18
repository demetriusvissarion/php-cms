<?php require('partials/head.php') ?>

<form method="POST" action="/users" >

		<h2>Page 1</h2>
        <p>
            <input type="text" name="page1_title" placeholder="title">
        </p>

		<h2>Page 2</h2>
        <p>
			<input type="text" name="page2_title" placeholder="title">
        </p>

		<h2>Page 3</h2>
        <p>
			<input type="text" name="page3_title" placeholder="title">
        </p>

        <button type="submit" >Change Title(s)</button>
    </form>


<?php require('partials/footer.php') ?>