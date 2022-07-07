<div class="wrapper">
        <div class="company">
            <p class="mt-1 mb-1 pb-1"><i class="fas fa-building"></i>&nbsp;<?= $comp_name ?></p>
            <p class="mt-1 mb-2 pb-1"><i class="fas fa-map-marker-alt"></i>&nbsp;<?= $comp_address ?></p>
        </div>

        <div class="text-center mt-2">
            <h4 class="mt-1 mb-2 pb-1">Employees by <?= $group_by ?></h4>
        </div>

        // Table Here

        <div class="text-center pt-1 mb-5 pb-1">
            <form action="<?= WEBROOT ?>totalleaves" method="POST"><button class="btn btn-primary" type="submit" name="submit">Download</button></form>
        </div>

    </div>