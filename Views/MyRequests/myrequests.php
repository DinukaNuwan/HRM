<div class="container">
    <div class="wrapper">

        <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="true">Pending</button>
                <button class="nav-link" id="nav-accepted-tab" data-bs-toggle="tab" data-bs-target="#nav-accepted" type="button" role="tab" aria-controls="nav-accepted" aria-selected="false">Accepted</button>
                <button class="nav-link" id="nav-rejected-tab" data-bs-toggle="tab" data-bs-target="#nav-rejected" type="button" role="tab" aria-controls="nav-rejected" aria-selected="false">Rejected</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

            <!-- Pending -->
            <div class="tab-pane fade show active" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                <div id="aspect-content">
                    <?php
                    if (isset($pending_requests)) {
                        if (count($pending_requests) == 0) {
                    ?>
                            <div class="logo img">
                                <img src="<?= WEBROOT ?>/Resources/Images/noreq.png" alt="logo">
                            </div>
                            <p class="noreq text-center">No pending requests</p>
                            <?php
                        } else {
                            foreach ($pending_requests as $request) {
                            ?>
                                <div class="aspect-tab ">
                                    <input id="<?= $request['application_id'] ?>" type="checkbox" class="aspect-input" name="aspect">
                                    <label for="<?= $request['application_id'] ?>" class="aspect-label"></label>
                                    <div class="aspect-content">
                                        <div class="aspect-info">
                                            <span class="aspect-name">
                                                <div class="second d-flex flex-row mt-2">
                                                    <div class="image mr-3">
                                                        <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                                    </div>
                                                    <div class="name-block">
                                                        <div class="d-flex flex-row">
                                                            <span class="name">&nbsp;&nbsp;<?= $request['firstname'] . ' ' . $request['lastname'] ?></span>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <span class="info">&nbsp;&nbsp;&nbsp;Employee ID: <?= $request['emp_id'] ?>, Request ID: <?= $request['application_id'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="aspect-tab-content">
                                        <div class="sentiment-wrapper">
                                            <!-- content -->
                                            <!-- req -->
                                            <div class="row">
                                                <form method="post" action="<?= WEBROOT ?>requests">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="data-title">Leave Type :
                                                                <span class="data">&nbsp;<?= $request['leave_type'] ?></span>
                                                            </p>
                                                            <p class="data-title">Leave Date :
                                                                <span class="data">&nbsp;<?= $request['from'] ?></span>
                                                            </p>
                                                            <p class="data-title">Return Date :
                                                                <span class="data">&nbsp;<?= $request['to'] ?></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="data-title">Reason for the leave:
                                                                <span class="data">&nbsp;<?= $request['reason'] ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Accepted -->
            <div class="tab-pane fade" id="nav-accepted" role="tabpanel" aria-labelledby="nav-accepted-tab">
                <div id="aspect-content">
                    <?php
                    if (isset($approved_requests)) {
                        if (count($approved_requests) == 0) {
                    ?>
                            <div class="logo img">
                                <img src="<?= WEBROOT ?>/Resources/Images/noreq.png" alt="logo">
                            </div>
                            <p class="noreq text-center">No approved requests</p>
                            <?php
                        } else {
                            foreach ($approved_requests as $request) {
                            ?>
                                <div class="aspect-tab ">
                                    <input id="<?= $request['application_id'] ?>" type="checkbox" class="aspect-input" name="aspect">
                                    <label for="<?= $request['application_id'] ?>" class="aspect-label"></label>
                                    <div class="aspect-content">
                                        <div class="aspect-info">
                                            <span class="aspect-name">
                                                <div class="second d-flex flex-row mt-2">
                                                    <div class="image mr-3">
                                                        <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                                    </div>
                                                    <div class="name-block">
                                                        <div class="d-flex flex-row">
                                                            <span class="name">&nbsp;&nbsp;<?= $request['firstname'] . ' ' . $request['lastname'] ?></span>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <span class="info">&nbsp;&nbsp;&nbsp;Employee ID: <?= $request['emp_id'] ?>, Request ID: <?= $request['application_id'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="aspect-tab-content">
                                        <div class="sentiment-wrapper">
                                            <!-- content -->
                                            <div class="row">
                                                <form method="post" action="<?= WEBROOT ?>requests">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="data-title">Leave Type :
                                                                <span class="data">&nbsp;<?= $request['leave_type'] ?></span>
                                                            </p>
                                                            <p class="data-title">Leave Date :
                                                                <span class="data">&nbsp;<?= $request['from'] ?></span>
                                                            </p>
                                                            <p class="data-title">Return Date :
                                                                <span class="data">&nbsp;<?= $request['to'] ?></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="data-title">Reason for the leave:
                                                                <span class="data">&nbsp;<?= $request['reason'] ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Rejected -->
            <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">
                <div id="aspect-content">
                    <?php
                    if (isset($rejected_requests)) {
                        if (count($rejected_requests) == 0) {
                    ?>
                            <div class="logo img">
                                <img src="<?= WEBROOT ?>/Resources/Images/noreq.png" alt="logo">
                            </div>
                            <p class="noreq text-center">No rejected requests</p>
                            <?php
                        } else {
                            foreach ($rejected_requests as $request) {
                            ?>
                                <div class="aspect-tab ">
                                    <input id="<?= $request['application_id'] ?>" type="checkbox" class="aspect-input" name="aspect">
                                    <label for="<?= $request['application_id'] ?>" class="aspect-label"></label>
                                    <div class="aspect-content">
                                        <div class="aspect-info">
                                            <span class="aspect-name">
                                                <div class="second d-flex flex-row mt-2">
                                                    <div class="image mr-3">
                                                        <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="50" />
                                                    </div>
                                                    <div class="name-block">
                                                        <div class="d-flex flex-row">
                                                            <span class="name">&nbsp;&nbsp;<?= $request['firstname'] . ' ' . $request['lastname'] ?></span>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <span class="info">&nbsp;&nbsp;&nbsp;Employee ID: <?= $request['emp_id'] ?>, Request ID: <?= $request['application_id'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="aspect-tab-content">
                                        <div class="sentiment-wrapper">
                                            <!-- content -->
                                            <div class="row">
                                                <form method="post" action="<?= WEBROOT ?>requests">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="data-title">Leave Type :
                                                                <span class="data">&nbsp;<?= $request['leave_type'] ?></span>
                                                            </p>
                                                            <p class="data-title">Leave Date :
                                                                <span class="data">&nbsp;<?= $request['from'] ?></span>
                                                            </p>
                                                            <p class="data-title">Return Date :
                                                                <span class="data">&nbsp;<?= $request['to'] ?></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="data-title">Reason for the leave:
                                                                <span class="data">&nbsp;<?= $request['reason'] ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>