<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/allusers.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">All Users</h4>
        </div>

        <div class="table" style="overflow-x:auto;">
            <table>
                <!-- <tr>
                    <th></th>
                    <th>Employee ID</th>
                    <th>Role</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                </tr> -->
                <tr>
                    <td>
                        <div class="image mr-3">
                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                        </div>
                    </td>
                    <td>12345</td>
                    <td><i class="fas fa-user-cog"></i>Admin</td>
                    <td>Deshan</td>
                    <td>Lakshitha</td>
                    <td><a href="<?= WEBROOT ?>editUser"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                </tr>
                <tr>
                    <td>
                        <div class="image mr-3">
                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                        </div>
                    </td>
                    <td>12345</td>
                    <td><i class="fas fa-user-tie"></i>Second Manager</td>
                    <td>Deshan</td>
                    <td>Lakshitha</td>
                    <td><a href="<?= WEBROOT ?>editUser"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                </tr>
                <tr>
                    <td>
                        <div class="image mr-3">
                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                        </div>
                    </td>
                    <td>12345</td>
                    <td><i class="fas fa-users"></i>HR Manager</td>
                    <td>Deshan</td>
                    <td>Lakshitha</td>
                    <td><a href="<?= WEBROOT ?>editUser"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                </tr>
                <tr>
                    <td>
                        <div class="image mr-3">
                            <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                        </div>
                    </td>
                    <td>12345</td>
                    <td><i class="fas fa-user"></i>General Employee</td>
                    <td>Deshan</td>
                    <td>Lakshitha</td>
                    <td><a href="<?= WEBROOT ?>editUser"><button class="btn btn-outline-primary" type="button">View</button></a></td>
                </tr>
            </table>
        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>