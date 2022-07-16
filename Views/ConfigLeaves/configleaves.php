<?php
if (isset($level_1) && isset($level_2) && isset($level_3)) {
?>
    <div class="container">
        <div class="wrapper">
            <div class="logo">
                <img src="<?= WEBROOT ?>/Resources/Images/allusers.png" alt="logo" height="50px" width="50px">
            </div>
            <div class="text-center">
                <h4 class="mt-1 mb-4 pb-1">Configure Leaves</h4>
            </div>

            <form method="POST" action="<?= WEBROOT . 'configleaves' ?>" id="form" class="form" onsubmit="return checkInputs()">
                <div class="hr">
                    <div class="row">
                        <p><i class="fas fa-user-shield"></i>HR Manager:</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id='hr'>
                                <label class="form-label" for="hr-annual">Annual</label>
                                <input disabled type="text" id="hr-annual" name="hr-annual" class="form-control td-value" value="<?= $level_1[0]['annual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id='hr'>
                                <label class="form-label" for="hr-casual">Casual</label>
                                <input disabled type="text" id="hr-casual" name="hr-casual" class="form-control td-value" value="<?= $level_1[0]['casual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id='hr'>
                                <label class="form-label" for="hr-no_pay">No-pay</label>
                                <input disabled type="text" id="hr-no_pay" name="hr-no_pay" class="form-control td-value" value="<?= $level_1[0]['no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id='hr'>
                                <label class="form-label" for="hr-maternity">Maternity</label>
                                <input disabled type="text" id="hr-maternity" name="hr-maternity" class="form-control td-value" value="<?= $level_1[0]['maternity'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id='hr'>
                                <label class="form-label" for="hr-m_no_pay">Mandatory no pay</label>
                                <input disabled type="text" id="hr-m_no_pay" name="hr-m_no_pay" class="form-control td-value" value="<?= $level_1[0]['mandatory_no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="second">
                    <div class="row">
                        <p><i class="fas fa-user-shield"></i>Second Manager:</p>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="scnd">
                                <label class="form-label" for="sc-anual">Annual</label>
                                <input disabled type="text" id="sc-annual" name="sc-annual" class="form-control td-value" value="<?= $level_2[0]['annual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="scnd">
                                <label class="form-label" for="sc-casual">Casual</label>
                                <input disabled type="text" id="sc-casual" name="sc-casual" class="form-control td-value" value="<?= $level_2[0]['casual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="scnd">
                                <label class="form-label" for="sc-no_pay">No-pay</label>
                                <input disabled type="text" id="sc-no_pay" name="sc-no_pay" class="form-control td-value" value="<?= $level_2[0]['no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="scnd">
                                <label class="form-label" for="sc-maternity">Maternity</label>
                                <input disabled type="text" id="sc-maternity" name="sc-maternity" class="form-control td-value" value="<?= $level_2[0]['maternity'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="scnd">
                                <label class="form-label" for="sc-m_no_pay">Mandatory no pay</label>
                                <input disabled type="text" id="sc-m_no_pay" name="sc-m_no_pay" class="form-control td-value" value="<?= $level_2[0]['mandatory_no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="general">
                    <div class="row">
                        <p><i class="fas fa-user-shield"></i>General Employee:</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="gnrl">
                                <label class="form-label" for="gm-anual">Annual</label>
                                <input disabled type="text" id="gm-annual" name="gm-annual" class="form-control td-value" value="<?= $level_3[0]['annual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="gnrl">
                                <label class="form-label" for="gm-casual">Casual</label>
                                <input disabled type="text" id="gm-casual" name="gm-casual" class="form-control td-value" value="<?= $level_3[0]['casual'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="gnrl">
                                <label class="form-label" for="gm-no_pay">No-pay</label>
                                <input disabled type="text" id="gm-no_pay" name="gm-no_pay" class="form-control td-value" value="<?= $level_3[0]['no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="gnrl">
                                <label class="form-label" for="gm-maternity">Maternity</label>
                                <input disabled type="text" id="gm-maternity" name="gm-maternity" class="form-control td-value" value="<?= $level_3[0]['maternity'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input" id="gnrl">
                                <label class="form-label" for="gm-m_no_pay">Mandatory no pay</label>
                                <input disabled type="text" id="gm-m_no_pay" name="gm-m_no_pay" class="form-control td-value" value="<?= $level_3[0]['mandatory_no_pay'] ?>" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-outline-primary" style="margin: 10px auto;" type="button" id="edit_btn" onclick="showHide()">Edit</button>
                    <button class="btn btn-outline-primary" style="margin: 10px auto;" type="submit" name="submit" id="save_btn" hidden>Submit</button>
                </div>
            </form>
            <?php
            if (isset($error)) {
                echo "error in front ";
                var_dump($error);
            }
            ?>
        <?php
    }
        ?>
        <?php
        if (isset($_GET['edit'])) {
            if ($_GET['edit'] === "success") {
                echo "hello";
        ?>
                <!-- Toast message to display error -->
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header" style="color: green;">
                            <i class="fas fa-check-circle" style="color: green;"></i>
                            <strong class="me-auto">Success</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            <?= $success ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <script src="<?= WEBROOT ?>Public/JavaScript/configLeavesValidate.js" />

        </div>
    </div>