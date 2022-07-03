<div class="container">
    <div class="wrapper">
        <div class="company">
            <p class="mt-1 mb-1 pb-1"><i class="fas fa-building"></i>&nbsp;Jupiter International</p>
            <p class="mt-1 mb-2 pb-1"><i class="fas fa-map-marker-alt"></i>&nbsp;Unioun Place, Colombo</p>
        </div>
        <div class="text-center mt-2">
            <h4 class="mt-1 mb-2 pb-1">Leave Report</h4>
            <h4 class="mt-1 mb-4 pb-1"><?= $deparment_name ?> Department</h4>
        </div>

        <div class="leave_content">
            <div class="period">
                <div class="row">
                    <div class="col-md-6">
                        <p class="info">From: <?= $from_date ?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="info" style="text-align: right;">To: <?= $to_date ?></p>
                    </div>
                </div>
            </div>
            <div class="types">
                <div class="row">
                    <p class="info">Aannual - XX</p>
                    <p class="info">Casual - XX</p>
                    <p class="info">Maternoity - XX</p>
                    <p class="info">No-Pay - XX</p>
                </div>
                <div class="row tot">
                    <p class="info tot_info">Total Leaves in Given Period - XX</p>
                </div>
            </div>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-primary" type="submit" name="submit">Download</button>
        </div>

    </div>
</div>