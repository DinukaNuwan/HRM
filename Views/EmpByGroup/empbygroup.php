<div class="wrapper">
        <div class="company">
            <p class="mt-1 mb-1 pb-1"><i class="fas fa-building"></i>&nbsp;<?= $comp_name ?></p>
            <p class="mt-1 mb-2 pb-1"><i class="fas fa-map-marker-alt"></i>&nbsp;<?= $comp_address ?></p>
        </div>

        <div class="text-center mt-2">
            <h4 class="mt-1 mb-2 pb-1">Employees by <?= $group_by ?></h4>
            <h4 class="mt-1 mb-2 pb-1"><?= $group_by ?> - <?= $group_by_value ?></h4>
        </div>

    <table class="table mt-2" style="overflow-x:auto;">
        <tr>
            <th>Employee Id</th>
            <th>Employment Status</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <?php
        if (isset($res)){
            foreach ($res as $r){
                echo "<tr>";
                echo "<td>" . $r['emp_id'] . "</td>";
                echo "<td>" . $r['employment_status'] . "</td>";
                echo "<td>" . $r['firstname'] . "</td>";
                echo "<td>" . $r['lastname'] . "</td>";
                echo "<td>" . $r['email'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
        <div class="text-center pt-1 mb-5 pb-1">
            <form action="<?= WEBROOT ?>totalleaves" method="POST"><button class="btn btn-primary" type="submit" name="submit">Download</button></form>
        </div>

    </div>