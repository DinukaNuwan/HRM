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
                            <label class="form-label" for="hr_anual">Annual</label>
                            <input disabled type="text" id="hr_anual" name="hr_anual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id='hr'>
                            <label class="form-label" for="hr_casual">Casual</label>
                            <input disabled type="text" id="hr_casual" name="hr_casual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id='hr'>
                            <label class="form-label" for="hr_no_pay">No-pay</label>
                            <input disabled type="text" id="hr_no_pay" name="hr_no_pay" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id='hr'>
                            <label class="form-label" for="hr_maternity">Maternity</label>
                            <input disabled type="text" id="hr_maternity" name="hr_maternity" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id='hr'>
                            <label class="form-label" for="hr_m_no_pay">Mandatory no pay</label>
                            <input disabled type="text" id="hr_m_no_pay" name="hr_m_no_pay" class="form-control td-value" value="10" />
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
                            <label class="form-label" for="second_anual">Annual</label>
                            <input disabled type="text" id="second_anual" name="second_anual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="scnd">
                            <label class="form-label" for="second_casual">Casual</label>
                            <input disabled type="text" id="second_casual" name="second_casual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="scnd">
                            <label class="form-label" for="second_no_pay">No-pay</label>
                            <input disabled type="text" id="second_no_pay" name="second_no_pay" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="scnd">
                            <label class="form-label" for="second_maternity">Maternity</label>
                            <input disabled type="text" id="second_maternity" name="second_maternity" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="scnd">
                            <label class="form-label" for="second_m_no_pay">Mandatory no pay</label>
                            <input disabled type="text" id="second_m_no_pay" name="second_m_no_pay" class="form-control td-value" value="10" />
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
                            <label class="form-label" for="general_anual">Annual</label>
                            <input disabled type="text" id="general_anual" name="general_anual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="gnrl">
                            <label class="form-label" for="general_casual">Casual</label>
                            <input disabled type="text" id="general_casual" name="general_casual" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="gnrl">
                            <label class="form-label" for="general_no_pay">No-pay</label>
                            <input disabled type="text" id="general_no_pay" name="general_no_pay" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="gnrl">
                            <label class="form-label" for="general_maternity">Maternity</label>
                            <input disabled type="text" id="general_maternity" name="general_maternity" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="gnrl">
                            <label class="form-label" for="general_m_no_pay">Mandatory no pay</label>
                            <input disabled type="text" id="general_m_no_pay" name="general_m_no_pay" class="form-control td-value" value="10" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-outline-primary" style="margin: 10px auto;" type="button" id="edit_btn" onclick="showHide()">Edit</button>
                <button class="btn btn-outline-primary" style="margin: 10px auto;" type="submit" id="save_btn" hidden>Submit</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/configLeavesValidate.js" />

    </div>
</div>