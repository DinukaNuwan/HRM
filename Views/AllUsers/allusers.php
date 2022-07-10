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

        <!-- <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4 searchbar">
                <form action="<?= WEBROOT ?>allusers" method="POST" class="d-flex">
                    <input class="searchinput form-control me-2" type="search" name="keyword" placeholder="Search by ID/Name" aria-label="Search">
                    <button class="searchbtn" name="search" id="search" type="submit">Search</button>
                </form>
            </div>
        </div> -->

        <?php
                if ($users) {
        ?>

            <div class="table" style="overflow-x:auto;">
                <table>
                    <?php
                    $count = 0;
                    foreach ($users as $user) {
                    ?>
                        <tr>
                            <td>
                                <div class="image mr-3">
                                    <?php
                                    if ($user['photo'])
                                        echo '<img src="data:image;base64,' . base64_encode($user['photo']) . '" alt="User image" class="rounded-circle" width="50" >';
                                    else
                                        echo '<img src="' . WEBROOT . '/Resources/images/nopic.jpg" class="rounded-circle" width="50" />';
                                    ?>
                                </div>
                            </td>
                            <td><?= $user['emp_id'] ?></td>
                            <td><i class="fas fa-user"></i><?= $user['user_role'] ?></td>
                            <td><?= $user['firstname'] ?></td>
                            <td><?= $user['lastname'] ?></td>
                            <td>
                                <?php
                                if ($supervisor_data[$count] != false) {
                                ?>
                                    <p class="text-center">Supervisor - <?= $supervisor_data[$count] ?></p>
                                <?php
                                } else {
                                ?>
                                    <a href="<?= WEBROOT . 'addsupervisor/' . $user['emp_id'] ?>"><button class="btn addsupervisor btn-outline-primary" type="button" style="width: fit-content;">Assign a Supervisor</button></a>
                                <?php
                                }
                                ?>
                            </td>
                            <td><a href="<?= WEBROOT . 'profile/' . $user['emp_id'] ?>"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                        </tr>
                    <?php
                        $count += 1;
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
                        <a href="<?= WEBROOT . 'allusers/' . $i + 1 ?>"><?= $i + 1 ?></a>
                <?php
                        }
                    }
                ?>
                <a href="">&raquo;</a>
            </div>

        <?php
                } else {
        ?>
            <p class="text-center mt-40 no_res">No users to display</p>
        <?php
                }
        ?>

    <?php
            }
    ?>
    </div>
</div>