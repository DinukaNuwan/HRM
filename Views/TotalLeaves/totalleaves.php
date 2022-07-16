<div class="container">
    <div class="wrapper">
        <div id="content">
            <div class="company">
                <p class="mt-1 mb-1 pb-1"><i class="fas fa-building"></i>&nbsp;<?= $comp_name ?></p>
                <p class="mt-1 mb-2 pb-1"><i class="fas fa-map-marker-alt"></i>&nbsp;<?= $comp_address ?></p>
            </div>

            <div class="text-center mt-2">
                <h4 class="mt-1 mb-2 pb-1">Leave Report</h4>
                <h4 class="mt-1 mb-4 pb-1"><?= $deparment_name ?> Department</h4>
            </div>

            <div class="leave_content">
                <div class="period">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="info">From <?= $from_date ?> to <?= $to_date ?></p>
                        </div>
                        
                    </div>
                </div>
                <?php
                if (!isset($empty)) {
                ?>
                    <div class="types">
                        <div class="row">
                            <?php
                            if (isset($Annual)) {
                                echo '<p class="info">Annual - ' . $Annual . '</p>';
                                echo '<input type="text" id="Annual" value="' . $Annual . '" hidden>';
                            } else {
                                // echo '<p class="info">Annual - 0</p>';
                                echo '<input type="text" id="Annual" value="0" hidden>';
                            }
                            if (isset($Casual)) {
                                echo '<p class="info">Casual - ' . $Casual . '</p>';
                                echo '<input type="text" id="Casual" value="' . $Casual . '" hidden>';
                            } else {
                                // echo '<p class="info">Casual - 0</p>';
                                echo '<input type="text" id="Casual" value="0" hidden>';
                            }
                            if (isset($Maternity)) {
                                echo '<p class="info">Maternity - ' . $Maternity . '</p>';
                                echo '<input type="text" id="Maternity" value="' . $Maternity . '" hidden>';
                            } else {
                                // echo '<p class="info">Maternity - 0</p>';
                                echo '<input type="text" id="Maternity" value="0" hidden>';
                            }
                            if (isset($No_Pay)) {
                                echo '<p class="info">No Pay - ' . $No_Pay . '</p>';
                                echo '<input type="text" id="No_Pay" value="' . $No_Pay . '" hidden>';
                            } else {
                                // echo '<p class="info">No Pay - 0</p>';
                                echo '<input type="text" id="No_Pay" value="0" hidden>';
                            }
                            ?>
                        </div>
                        <div class="row tot">
                            <?php
                            if (isset($total)) {
                                echo '<p class="info tot_info">Total Leaves in Given Period - ' . $total . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="chart">
                        <canvas class="canvas_chart" id="myChart"></canvas>
                        <script src="<?= WEBROOT ?>Public/JavaScript/totLeavesPieChart.js"></script>
                    </div>
            </div>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn" id="generatePDF">Download</button>
        </div>
    <?php
                } else {
    ?>
        <div class="logo img">
            <img src="<?= WEBROOT ?>/Resources/Images/noreq.png" alt="logo">
        </div>
        <p class="noreq text-center">No leaves have been given in this period.</p>
    <?php
                }
    ?>

    </div>

    <!-- script to download pdf -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="<?= WEBROOT ?>Public/JavaScript/download.js"></script>
</div>