<div class="container">
    <div class="wrapper">
        <div id="content">
            <div class="company">
                <p class="mt-1 mb-1 pb-1"><i class="fas fa-building"></i>&nbsp;<?= $comp_name ?></p>
                <p class="mt-1 mb-2 pb-1"><i class="fas fa-map-marker-alt"></i>&nbsp;<?= $comp_address ?></p>
            </div>

            <div class="text-center mt-2">
                <h4 class="mt-1 mb-2 pb-1">Leave Report by Supervisor</h4>
                <h4 class="mt-1 mb-4 pb-1"><?= $sup_deparment_name ?> Department</h4>
            </div>

            <div class="leave_content">
                <div class="period">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="info">From <?= $sup_from_date ?> to <?= $sup_to_date ?></p>
                        </div>
                    </div>
                </div>
                <div class="data">
                    <?php
                    $sup_name = '';
                    $tbl = false;
                    foreach ($leave_data as $dat) {
                        $tname = $dat['sup_fname'] . ' ' . $dat['sup_lname'];
                        if ($tname !== $sup_name) {
                            $sup_name = $tname;
                            if ($tbl) {
                                echo "</table>";
                                $tbl = false;
                            }
                    ?>

                            <div class="mt-2">
                                <h5 class="mt-1 mb-2 pb-1 sup_name"><?= $tname ?></h4>
                            </div>

                            <table class="table mt-2" style="overflow-x:auto;">
                                <tr>
                                    <th>Name</th>
                                    <th>Total Leaves</th>
                                </tr>
                                <tr>
                                    <td><?= $dat['firstname'] ?> <?= $dat['lastname'] ?></td>
                                    <td><?= $dat['count'] ?></td>
                                </tr>
                            <?php
                            $tbl = true;
                        } else {

                            ?>
                                <tr>
                                    <td><?= $dat['firstname'] ?> <?= $dat['lastname'] ?></td>
                                    <td><?= $dat['count'] ?></td>
                                </tr>
                        <?php
                            continue;
                        }
                    }
                    if ($tbl) {
                        echo "</table>";
                        $tbl = false;
                    }
                        ?>

                </div>
            </div>

        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn" id="generatePDF">Download</button>
        </div>

    </div>

    <!-- script to download pdf -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="<?= WEBROOT ?>Public/JavaScript/download.js"></script>
</div>