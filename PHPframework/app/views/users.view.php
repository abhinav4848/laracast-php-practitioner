<?php require 'partials/header.php';?>

<h1>All Tasks</h1>
<?php

    echo '<ul>';
    foreach ($tasks as $key => $value) {
        echo '<li>';

        if ($value->completed) {
            echo '<strike>'.$value->description.'</strike>';
        } else {
            echo $value->description;
        }

        echo '</li>';
    }
    echo '</ul>';

?>

<h1>Submit your Name</h1>
<form action="/names" method="post">
    <input type="text" name="name" placeholder="Enter your name"
        value="<?=substr(str_shuffle(MD5(microtime())), 0, 10)?>">
    <input type="text" name="description" placeholder="Enter a description"
        value="<?=substr(str_shuffle(MD5(microtime())), 0, 10)?>">
    <!-- <label><input type="checkbox" name="completed">Completed?</label> -->
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php';?>