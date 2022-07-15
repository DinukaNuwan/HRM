<html>
<form action="<?php echo WEBROOT . "attributes" ?>" method="POST">

<?php

    if (!empty($columns)){
        foreach ($columns as $column) {
            echo
            '<label for="' . $column . '"> ' . $column . '</label>
            <input type="submit" name="' . $column . '" id="' . $column . '" value="Delete"> <br>';
            
            if ($err == "deleteAttrFailed") {
                echo "Failed to delete the attribute";
            }
        }
    } else {
        echo "No custom fields are present <br>";
    }

?>
</form>

    <form action="<?php echo WEBROOT . "attributes" ?>" method="GET">
        <input type="text" id="attrName" name="attrName" value=""> <br>
        <input type="submit" value="Add">
        <?php
            echo "Failed to add the attribute";
        ?>
    </form>
</html>