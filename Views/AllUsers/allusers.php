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
                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                            </div>
                        </td>
                        <td><?= $user['emp_id'] ?></td>
                        <td><i class="fas fa-user"></i><?= $user['user_role'] ?></td>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><a href="<?= WEBROOT ?>editUser"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="pagination">
            <a href="">&laquo;</a>          
            <a href="">1</a>            
            <a href="">&raquo;</a>
        </div>

    <?php
            }
    ?>
    </div>
</div>