<div class="wrapper">
    <div class="text-center">
        <h4 class="mt-1 mb-4 pb-1">Custom Attributes</h4>
    </div>

    <div>
        <h6 class="mt-1 pb-1">Current Attributes</h4>
    </div>
    <form action="<?php echo WEBROOT . "attributes" ?>" method="POST">

        <table class="table mt-2" style="overflow-x:auto;">
                <?php
                if (!empty($columns)) {
                    foreach ($columns as $column) {
                        echo
                        '<tr class="mt-2">
                            <td></td>
                            <td>
                                <p class="info">' . $column . '</p>
                            </td>
                            <td>
                                <input  class="btn btn-del btn-primary" type="submit" name="' . $column . '" id="' . $column . '" value="Delete">
                            </td>
                        </tr>';

                        if ($err == "deleteAttrFailed") {
                            echo "Failed to delete the attribute";
                        }
                    }
                } else {
                    echo "No custom fields are present <br>";
                }

                ?>
        </table>
    </form>

    <br>
    <br>

    <div>
        <h6 class="mt-1 pb-1">Add New Attributes</h4>
    </div>
    <form action="<?php echo WEBROOT . "attributes" ?>" method="GET">
        <div class="form-control form-outline form-input">
            <label class="form-label" for="password">Attribute Name</label>
            <input class="form-control form-outline form-input" type="text" id="attrName" name="attrName" value="">
        </div>
        <div class="text-center pt-1 mb-5 pb-1">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>
    </form>
</div>