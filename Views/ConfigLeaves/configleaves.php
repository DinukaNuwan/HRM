<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/allusers.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Configure Leaves</h4>
        </div>

        <form method="POST" action="" id="form" class="form">
            <!-- <form method="POST" action="" id="form" class="form" onsubmit="return checkInputs()"> -->
            <div class="row">
                <div class="col-md-5">
                    <select class="form-select" aria-label="Default select example" style="width: 100%; margin-top: 20px;">
                        <option value="">Select pay grade...</option>
                        <option value="annual">HR Manager</option>
                        <option value="casual">Second Manager</option>
                        <option value="maternity">General Employee</option>
                    </select>

                    <button class="btn btn-outline-primary" style="margin: 10px auto;" type="button" id="edit_btn" onclick="showHide()">Edit</button>
                    <button class="btn btn-outline-primary" style="margin: 10px auto;" type="submit" id="save_btn" hidden>Submit</button>

                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="anual">Annual</label>
                                <input disabled type="text" id="anual" name="anual" class="form-control td-value" value="XX" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="casual">Casual</label>
                                <input disabled type="text" id="casual" name="casual" class="form-control td-value" value="XX" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="no_pay">No-pay</label>
                                <input disabled type="text" id="no_pay" name="no_pay" class="form-control td-value" value="XX" />
                                <small>Error message</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="maternity">Maternity</label>
                                <input disabled type="text" id="maternity" name="maternity" class="form-control td-value" value="XX" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="m_no_pay">Mandatory no pay</label>
                                <input disabled type="text" id="m_no_pay" name="m_no_pay" class="form-control td-value" value="XX" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>

                </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/configLeavesValidate.js" />

    </div>
</div>