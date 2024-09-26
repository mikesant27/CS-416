<?php
    $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<p>Guessing Game...</p>
<form method="post">
    <p><label for="guess">Input Guess</label>
    <input type="text" name="guess" size="40" id="guess" value="<?=$oldguess ?>"/></p>
    <input type="submit"/>
</form>
<pre>
    $_POST:
    <?php
        print_r($_POST);
    ?>
    $_GET:
    <?php
        print_r($_GET);
    ?>
</pre>