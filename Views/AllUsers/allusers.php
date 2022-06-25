<div class="container">

    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/allusers.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">All Users</h4>
            <?php
            if (isset($users)) {
            ?>
        </div>

        <div class="table" style="overflow-x:auto;">
            <table>
                <?php
                foreach ($users as $user) {
                ?>
                    <tr>
                        <td>
                            <div class="image mr-3">
                                <?php
                                if ($user['photo'])
                                    echo '<img src="data:image;base64,' . base64_encode($user['photo']) . '" alt="User image" class="rounded-circle" width="50" >';
                                else
                                    echo '<img src="'. WEBROOT .'/Resources/images/nopic.jpg" class="rounded-circle" width="50" />';
                                ?>
                            </div>
                        </td>
                        <td><?= $user['emp_id'] ?></td>
                        <td><i class="fas fa-user"></i><?= $user['user_role'] ?></td>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><a href="profile"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="pagination">
            <a href="">&laquo;</a>
            <?php
                if (isset($count) && isset($no_of_pages)) {
                    for ($i = 0; $i < $no_of_pages; $i++) {
            ?>
                    <a href="allusers"><?= $i + 1 ?></a>
            <?php
                    }
                }
            ?>
            <a href="">&raquo;</a>
        </div>

    <?php
            }
    ?>
    </div>
</div>