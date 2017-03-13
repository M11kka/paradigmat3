<!doctype html>
<html>
    <form method="post" action="tahdet.php">
    <input type="number" name="tahti">
    </form>
    <?php
    $a = $_POST['tahti'];
    $b = 0;
    while ($b <= $a) {        
        $b++;
        echo "* ";
    } 
    ?>
</html>