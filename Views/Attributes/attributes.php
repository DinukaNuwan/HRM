<html>
<form action="<?php echo WEBROOT . "attributes" ?>" method="POST">

<?php

    if (!empty($columns)){
        foreach ($columns as $column) {
            echo '<input type="submit" name="' . $column . '" value="Delete ' . $column . '"> <br>';
        }
    } else {
        echo "No custom fields are present <br>";
    }

?>
</form>

    <form action="<?php echo WEBROOT . "attributes" ?>" method="GET">
        <input type="text" id="attrName" name="attrName" value=""> <br>
        <input type="submit" value="Add">
    </form>
</html>