<!doctype html>
<html>
    <form method="post" action="tahdet.php">
    <input type="number" name="tahti">
    </form>
    <?php
    $a = $_POST['tahti'];
    $b = 1;
    do {        
        $b++;
        echo "* ";
        for{
            echo "</br>";
        };
    } while ($b <= $a);
    ?>
</html>