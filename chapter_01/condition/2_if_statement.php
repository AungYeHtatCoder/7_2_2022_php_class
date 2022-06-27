<?php
$secretNumber = 453;
if (isset($_POST['guess']) == $secretNumber) {
    echo "<p>Congratulations!</p>";
}
?>

<form action="" method="POST">
 <input type="number" name="guess">
 <input type="submit" value="Guess">
</form>